<?php namespace Acme\Contact\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Validator;
use ValidationException;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }

    public function defineProperties()
    {
        return [
            'recipient' => [
                'title'   => 'Recipient Email',
                'type'    => 'string',
                'default' => 'rosy@pvedubai.com',
            ],
            'successMessage' => [
                'title'   => 'Success Message',
                'type'    => 'string',
                'default' => 'Thanks for contacting us!',
            ],
        ];
    }

    public function onSend()
    {
        $data = post();
        Log::info('Contact form submitted.', $data);

        $rules = [
            'name'    => 'required|min:2',
            'email'   => 'required|email',
            'phone'   => 'nullable|string',
            'subject' => 'nullable|string',
            'message' => 'required|min:5',
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            Log::warning('Validation failed for contact form.', $validator->errors()->toArray());
            throw new ValidationException($validator);
        }

        $recipient = $this->property('recipient');
        $successMessage = $this->property('successMessage');

        try {
            Mail::send('acme.contact::mail.contact', $data, function ($msg) use ($data, $recipient) {
                $msg->to($recipient);
                $msg->subject('Contact Form Message from ' . $data['name']);
            });

            Log::info('Mail successfully sent to ' . $recipient);
        } catch (\Exception $e) {
            Log::error('Failed to send contact form email: ' . $e->getMessage());
            return ['#formResult' => "<div class='text-red-600'>Failed to send message. Please try again later.</div>"];
        }

        return ['#formResult' => "<div class='text-green-600'>{$successMessage}</div>"];
    }
}
