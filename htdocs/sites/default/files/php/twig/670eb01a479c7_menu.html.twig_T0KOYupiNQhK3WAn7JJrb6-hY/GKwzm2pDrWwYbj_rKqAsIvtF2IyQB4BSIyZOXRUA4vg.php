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

/* themes/custom/xOLD_rhythm/templates/navigation/menu.html.twig */
class __TwigTemplate_e84bd8cebd8f3ddd9a3bf44380fe0e1f extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["sub_class"] ?? null)], 23, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "sub_class", "menu_level"]);        yield from [];
    }

    // line 25
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__sub_class__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "sub_class" => $__sub_class__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 26
            yield "  ";
            $macros["menus"] = $this;
            // line 27
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 28
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                    yield ">
        ";
                    // line 30
                    $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 30)) ? ("<i class=\"fa toggle-menu-icon fa-angle-down\"></i>") : (""));
                    // line 31
                    yield "        ";
                    $context["class"] = (("class = \"" . $this->sandbox->ensureToStringAllowed(($context["sub_class"] ?? null), 31, $this->source)) . "-has-sub\"");
                    // line 32
                    yield "        <a href = \"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 32)) ? ($this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 32, $this->source)) : ("")));
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                    yield "
          ";
                    // line 33
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 33) && (($context["menu_level"] ?? null) == 0))) ? (" <i class=\"fa toggle-menu-icon fa-angle-down\"></i>") : ("")));
                    yield "
          ";
                    // line 34
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 34) && (($context["menu_level"] ?? null) > 0))) ? (" <i class=\"fa toggle-menu-icon fa-angle-right right\"></i>") : ("")));
                    yield "
        </a>
        ";
                    // line 36
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 36)) {
                        // line 37
                        yield "          <ul class = \"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_class"] ?? null), 37, $this->source), "html", null, true);
                        yield "-sub\">
          ";
                        // line 38
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 38), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["sub_class"] ?? null)], 38, $context, $this->getSourceContext()));
                        yield "
          </ul>
        ";
                    }
                    // line 41
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/xOLD_rhythm/templates/navigation/menu.html.twig";
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
        return array (  132 => 43,  125 => 41,  119 => 38,  114 => 37,  112 => 36,  107 => 34,  103 => 33,  94 => 32,  91 => 31,  89 => 30,  84 => 29,  79 => 28,  76 => 27,  73 => 26,  58 => 25,  49 => 23,  46 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/xOLD_rhythm/templates/navigation/menu.html.twig", "/var/www/html/htdocs/themes/custom/xOLD_rhythm/templates/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 25, "if" => 27, "for" => 28, "set" => 30);
        static $filters = array("escape" => 29, "raw" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'raw'],
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
