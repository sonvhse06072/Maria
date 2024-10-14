<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* modules/custom/rhythm_shortcodes/templates/rhythm-cms-menu.html.twig */
class __TwigTemplate_6c2ad599baf93eb5ffb120116f6d4488 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!-- Navigation panel -->
<nav class=\"main-nav ";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color"] ?? null), 2, $this->source), "html", null, true);
        yield "\">
  <div class=\"full-wrapper relative clearfix\">
    <!-- Logo ( * your text or image into link tag *) -->
    <div class=\"nav-logo-wrap local-scroll\">
      <a href=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        yield "\" class=\"logo\">
          <img src=\"";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 7, $this->source), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 7, $this->source), "html", null, true);
        yield "\" title = \"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 7, $this->source), "html", null, true);
        yield "\" />
      </a>
    </div>
    <div class=\"mobile-nav\">
        <i class=\"fa fa-bars\"></i>
    </div>
    
    <!-- Main Menu -->
    <div class=\"inner-nav desktop-nav\">
      <ul class=\"clearlist\">
        ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu"] ?? null), 17, $this->source), "html", null, true);
        yield "
        <li><a style=\"height: 75px; line-height: 75px;\">&nbsp;</a></li>
        ";
        // line 19
        if (($context["search"] ?? null)) {
            // line 20
            yield "          <li class=\"search-dropdown-list mega-align-right\">
            <a href=\"#\" class=\"mn-has-sub\" style=\"height: 75px; line-height: 75px;\">
              <i class=\"fa fa-search\"></i> ";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search"));
            yield "
            </a>
            <ul class=\"mn-sub\" style=\"display: none;\">
              <li>
                <div class=\"mn-wrap\">
                  ";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search"] ?? null), 27, $this->source), "html", null, true);
            yield "
                </div>
              </li>
            </ul>
          </li>
        ";
        }
        // line 33
        yield "        ";
        if (($context["cart"] ?? null)) {
            // line 34
            yield "          <li>
            <a href=\"";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("commerce_cart.page"));
            yield "\" style=\"height: 75px; line-height: 75px;\">
              <i class=\"fa fa-shopping-cart\"></i> ";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cart"));
            yield " (";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_count"] ?? null), 36, $this->source), "html", null, true);
            yield ")
            </a>
          </li>
        ";
        }
        // line 40
        yield "        ";
        if (($context["language"] ?? null)) {
            // line 41
            yield "          <li>
            <a href=\"#\" style=\"height: 75px; line-height: 75px;\" class=\"mn-has-sub\">";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lang_code"] ?? null), 42, $this->source), "html", null, true);
            yield " <i class=\"fa fa-angle-down\"></i></a>
            ";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 43, $this->source), "html", null, true);
            yield "
          </li>
        ";
        }
        // line 46
        yield "      </ul>
    </div>
    <!-- End Main Menu -->
  </div>
</nav>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["color", "logo", "site_name", "menu", "search", "cart", "cart_count", "language", "lang_code"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/rhythm_shortcodes/templates/rhythm-cms-menu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  138 => 46,  132 => 43,  128 => 42,  125 => 41,  122 => 40,  113 => 36,  109 => 35,  106 => 34,  103 => 33,  94 => 27,  86 => 22,  82 => 20,  80 => 19,  75 => 17,  58 => 7,  54 => 6,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/rhythm_shortcodes/templates/rhythm-cms-menu.html.twig", "/var/www/html/htdocs/modules/custom/rhythm_shortcodes/templates/rhythm-cms-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 2, "t" => 22);
        static $functions = array("url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['url'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
