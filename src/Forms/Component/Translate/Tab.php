<?php

namespace SolutionForest\FilamentTranslateField\Forms\Component\Translate;

use Filament\Schemas\Components\Tabs\Tab as BaseTab;

class Tab extends BaseTab
{
    protected string $view = 'filament-translate-field::forms.components.translate-tab';

    protected ?string $locale = null;

    public function locale(?string $locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }
}
