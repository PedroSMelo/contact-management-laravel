<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFormValidationTest extends TestCase
{
    use RefreshDatabase;

    public function it_requires_name_contact_and_email_fields_for_creation()
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->post(route('contacts.store'), [])
            ->assertSessionHasErrors(['name', 'contact', 'email']);
    }

    public function it_requires_unique_email_for_creation()
    {
        $user = User::factory()->create();
        $existingContact = Contact::factory()->create(['email' => 'test@example.com']);

        $this->actingAs($user)
            ->post(route('contacts.store'), [
                'name' => 'John Doe',
                'contact' => '123456789',
                'email' => 'test@example.com',
            ])
            ->assertSessionHasErrors(['email']);
    }

    public function it_requires_valid_email_format()
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->post(route('contacts.store'), [
                'name' => 'John Doe',
                'contact' => '123456789',
                'email' => 'invalid-email',
            ])
            ->assertSessionHasErrors(['email']);
    }
}
