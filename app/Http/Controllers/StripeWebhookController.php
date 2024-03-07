<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Cashier\Subscription;
use Laravel\Cashier\Http\Controllers\WebhookController as CashierController;

class StripeWebhookController extends CashierController
{
    public function handleWebhook(Request $request)
    {
        $payload = $request->all();
        $event = $payload['type'];
        
        

        switch ($event) {
            case 'invoice.payment_succeeded':
                // Gérer l'événement de paiement réussi
               
                $this->handleSuccessfulPayment($payload);
                break;

                case 'customer.subscription.updated':
                    Stripe::setApiKey(env('STRIPE_SECRET'));
                    
                    $planId = $payload['object']['items']['data'][0]['plan']['id'];
                    $customerId = $payload['object']['customer']; // Récupérer l'ID client depuis l'objet d'événement
                    $user = User::where('stripe_id', $customerId)->first();
                    
                    if ($user) {
                        $subscription = Subscription::where('user_id', $user->id)->first(); // Trouvez l'abonnement de l'utilisateur
                
                        if ($subscription) {
                            $subscription->stripe_price = $planId;
                            $subscription->save(); 
                        }
                    }
                    // Malheureusement cashier n'offre pas l'option de modifier la colonne type on peut juste modifier le stripe_price
                    break;
                
            
        }


        return response()->json(['status' => 'success']);
    }

    protected function handleSuccessfulPayment($payload)
    {
      
        // Logique pour gérer un paiement réussi, par exemple:
        // - Mettre à jour le statut de l'abonnement de l'utilisateur
        // - Rediriger l'utilisateur ou envoyer une notification
    }
}
