<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Form;
use Filament\Pages\Auth\Login as BaseLogin;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Component;
use Illuminate\Validation\ValidationException;

class Login extends BaseLogin
{
    /**
     * @return array<int | string, string | array<string, mixed>>
     */
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getRememberFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getEmailFormComponent(): Component
    {
        return parent::getEmailFormComponent()
            ->extraAttributes(['class' => 'premium-input']);
    }

    protected function getPasswordFormComponent(): Component
    {
        return parent::getPasswordFormComponent()
            ->extraAttributes(['class' => 'premium-input']);
    }

    public function authenticate(): \Filament\Http\Responses\Auth\Contracts\LoginResponse
    {
        return parent::authenticate();
    }

    public function getView(): string
    {
        return 'filament.pages.auth.login';
    }
}
