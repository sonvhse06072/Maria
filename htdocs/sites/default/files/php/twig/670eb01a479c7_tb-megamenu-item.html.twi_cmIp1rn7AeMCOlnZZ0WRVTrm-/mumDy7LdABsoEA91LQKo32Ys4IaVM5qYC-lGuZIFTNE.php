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

/* themes/custom/xOLD_rhythm/templates/tb_megamenu/tb-megamenu-item.html.twig */
class __TwigTemplate_5534325e9de61a876c527505c6d5c29b extends Template
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
        $context["local_class"] = (((is_string($__internal_compile_0 = (($__internal_compile_2 = ($context["link"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["url"] ?? null) : null)) && is_string($__internal_compile_1 = "#") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? ("local-scroll") : (""));
        // line 2
        yield "<li ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["local_class"] ?? null)], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        yield " >
  ";
        // line 3
        if ((($__internal_compile_3 = ($context["item_config"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["caption"] ?? null) : null)) {
            // line 4
            yield "    <a class=\"mn-group-title\" style=\"height: 97px; line-height: 75px;\"> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["item_config"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["caption"] ?? null) : null), 4, $this->source), "html", null, true);
            yield "</a>
  ";
        }
        // line 6
        yield "  <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = ($context["link"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["url"] ?? null) : null), 6, $this->source), "html", null, true);
        yield "\" ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = ($context["link"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["attributes"] ?? null) : null), 6, $this->source), "html", null, true);
        yield ">
    ";
        // line 7
        if ((($__internal_compile_7 = ($context["item_config"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["xicon"] ?? null) : null)) {
            // line 8
            yield "      <span><i class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = ($context["item_config"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["xicon"] ?? null) : null), 8, $this->source), "html", null, true);
            yield " fa-sm\"></i></span>
    ";
        }
        // line 10
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "title_translate", [], "any", false, false, true, 10), 10, $this->source)));
        yield "
    ";
        // line 11
        if ((($context["submenu"] ?? null) && (($__internal_compile_9 = ($context["block_config"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["auto-arrow"] ?? null) : null))) {
            // line 12
            yield "      <i class=\"fa toggle-menu-icon fa-angle-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["angle_class"] ?? null), 12, $this->source), "html", null, true);
            yield "\"></i>
    ";
        }
        // line 14
        yield "  </a>
  ";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submenu"] ?? null), 15, $this->source), "html", null, true);
        yield "
</li>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["link", "attributes", "item_config", "submenu", "block_config", "angle_class"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/xOLD_rhythm/templates/tb_megamenu/tb-megamenu-item.html.twig";
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
        return array (  90 => 15,  87 => 14,  81 => 12,  79 => 11,  74 => 10,  68 => 8,  66 => 7,  59 => 6,  53 => 4,  51 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/xOLD_rhythm/templates/tb_megamenu/tb-megamenu-item.html.twig", "/var/www/html/htdocs/themes/custom/xOLD_rhythm/templates/tb_megamenu/tb-megamenu-item.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3);
        static $filters = array("escape" => 2, "t" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
                [],
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
