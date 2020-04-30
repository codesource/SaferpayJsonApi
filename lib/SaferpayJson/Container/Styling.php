<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class Styling
{
    const THEME_DEFAULT = 'DEFAULT';
    const THEME_SIX = 'SIX';
    const THEME_NONE = 'NONE';

    /**
     * @var string|null
     * @SerializedName("CssUrl")
     */
    protected $cssUrl;

    /**
     * @var string|null
     * @SerializedName("Theme")
     */
    protected $theme;

    public function getCssUrl(): ?string
    {
        return $this->cssUrl;
    }

    public function setCssUrl(string $cssUrl): self
    {
        $this->cssUrl = $cssUrl;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }
}
