<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Cashier\Http\Controllers\WebhookController as CashierController;

class StripeWebhookController extends CashierController
{
    public function handleWebhook(Request $request)
    {
        // Vous pouvez ici personnaliser la gestion des différents types d'événements
        $payload = $request->all();
        $type = $payload['type'];

        switch ($type) {
            case 'checkout.session.completed':
               
                break;
            case 'customer.subscription.deleted':
                // Gérer l'événement
                break;
            // Ajoutez d'autres cas au besoin
            default:
                return $this->missingMethod();
        }

        return parent::handleWebhook($request);
    }
}
