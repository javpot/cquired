<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Cashier\Http\Controllers\WebhookController as CashierController;

class StripeWebhookController extends CashierController
{
    public function handleWebhook(Request $request)
    {
        $payload = $request->all();
        $event = $payload['type'];

        switch ($event) {
            case 'checkout.session.completed':
                // Gérer l'événement de paiement réussi
                $this->handleSuccessfulPayment($payload);
                break;
            // Ajouter d'autres cas au besoin
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
