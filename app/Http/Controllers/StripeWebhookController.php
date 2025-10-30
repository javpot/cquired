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
    $payload = $request->getContent();
    $sigHeader = $request->header('Stripe-Signature');
    $secret = config('cashier.webhook.secret'); // ou env('STRIPE_WEBHOOK_SECRET')

    try {
        $event = \Stripe\Webhook::constructEvent(
            $payload,
            $sigHeader,
            $secret
        );
    } catch (\UnexpectedValueException $e) {
        // Payload invalide
        return response()->json(['error' => 'Invalid payload'], 400);
    } catch (\Stripe\Exception\SignatureVerificationException $e) {
        // Signature invalide
        return response()->json(['error' => 'Invalid signature'], 400);
    }

    // Ensuite, ton switch habituel :
    switch ($event->type) {
        case 'invoice.payment_succeeded':
            $this->handleSuccessfulPayment($event->data->object);
            break;
        case 'customer.subscription.updated':
            // A rajouter pour l'instant il y a aucune relation entre subscription et agence/Freelance
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
