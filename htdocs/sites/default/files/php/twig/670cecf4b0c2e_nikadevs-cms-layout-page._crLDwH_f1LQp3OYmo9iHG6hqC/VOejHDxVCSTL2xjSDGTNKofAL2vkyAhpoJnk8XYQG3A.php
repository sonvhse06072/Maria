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

/* modules/custom/nikadevs_cms/templates/nikadevs-cms-layout-page.html.twig */
class __TwigTemplate_50ee5e1aeda60bf9725eade1f344df4d extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "rows", [], "any", false, false, true, 1));
        foreach ($context['_seq'] as $context["id"] => $context["row"]) {
            // line 2
            yield "
    ";
            // line 3
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "settings", [], "any", false, true, true, 3), "tag", [], "any", true, true, true, 3)) {
                // line 4
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "settings", [], "any", false, false, true, 4), "tag", [], "any", false, false, true, 4) == "none")) {
                    // line 5
                    yield "          ";
                    $context["tag"] = "";
                    // line 6
                    yield "      ";
                } else {
                    // line 7
                    yield "          ";
                    $context["tag"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "settings", [], "any", false, false, true, 7), "tag", [], "any", false, false, true, 7);
                    // line 8
                    yield "      ";
                }
                // line 9
                yield "    ";
            } else {
                // line 10
                yield "        ";
                $context["tag"] = "";
                // line 11
                yield "    ";
            }
            // line 12
            yield "
    ";
            // line 13
            if (($context["tag"] ?? null)) {
                // line 14
                yield "        <";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 14, $this->source), "html", null, true);
                yield " class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "wrap", [], "any", false, false, true, 14), "attributes", [], "any", false, false, true, 14), "class", [], "any", false, false, true, 14), 14, $this->source), " "), "html", null, true);
                yield "\" style=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "wrap", [], "any", false, false, true, 14), "attributes", [], "any", false, false, true, 14), "style", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                yield "\">
    ";
            }
            // line 16
            yield "
    ";
            // line 17
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "settings", [], "any", false, true, true, 17), "full_width", [], "any", true, true, true, 17)) {
                // line 18
                yield "        ";
                $context["container_class"] = "-fluid";
                // line 19
                yield "    ";
            } else {
                // line 20
                yield "        ";
                $context["container_class"] = "";
                // line 21
                yield "    ";
            }
            // line 22
            yield "
      <div class=\"container";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_class"] ?? null), 23, $this->source), "html", null, true);
            yield "\">

        <div id=\"";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 25), "id", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            yield "\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 25), "class", [], "any", false, false, true, 25), 25, $this->source), " "), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "settings", [], "any", false, false, true, 25), "class", [], "any", false, false, true, 25), 25, $this->source), " "), "html", null, true);
            yield "\">

          ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["layout"] ?? null), "regions", [], "any", false, false, true, 27));
            foreach ($context['_seq'] as $context["region_key"] => $context["region"]) {
                // line 28
                yield "
            ";
                // line 29
                if ((($context["id"] == CoreExtension::getAttribute($this->env, $this->source, $context["region"], "row_id", [], "any", false, false, true, 29)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["region"], "content", [], "any", false, false, true, 29)))) {
                    // line 30
                    yield "
              ";
                    // line 31
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["region"], "settings", [], "any", false, false, true, 31), "tag", [], "any", false, false, true, 31)) {
                        // line 32
                        yield "                <";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["region"], "settings", [], "any", false, false, true, 32), "tag", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                        yield " id=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["region"], "attributes", [], "any", false, false, true, 32), "id", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                        yield "\" class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["region"], "attributes", [], "any", false, false, true, 32), "class", [], "any", false, false, true, 32), 32, $this->source), " "), "html", null, true);
                        yield "\" style=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["region"], "attributes", [], "any", false, false, true, 32), "style", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                        yield "\">
              ";
                    }
                    // line 34
                    yield "
                ";
                    // line 35
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["region"], "content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    yield "

              ";
                    // line 37
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["region"], "settings", [], "any", false, false, true, 37), "tag", [], "any", false, false, true, 37)) {
                        // line 38
                        yield "                </";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["region"], "settings", [], "any", false, false, true, 38), "tag", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                        yield ">
              ";
                    }
                    // line 40
                    yield "
            ";
                }
                // line 42
                yield "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['region_key'], $context['region'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "
        </div>

      </div>

    ";
            // line 49
            if (($context["tag"] ?? null)) {
                // line 50
                yield "        </";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 50, $this->source), "html", null, true);
                yield ">
    ";
            }
            // line 52
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["layout"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/nikadevs_cms/templates/nikadevs-cms-layout-page.html.twig";
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
        return array (  194 => 52,  188 => 50,  186 => 49,  179 => 44,  172 => 42,  168 => 40,  162 => 38,  160 => 37,  155 => 35,  152 => 34,  140 => 32,  138 => 31,  135 => 30,  133 => 29,  130 => 28,  126 => 27,  117 => 25,  112 => 23,  109 => 22,  106 => 21,  103 => 20,  100 => 19,  97 => 18,  95 => 17,  92 => 16,  82 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/nikadevs_cms/templates/nikadevs-cms-layout-page.html.twig", "/var/www/html/htdocs/modules/custom/nikadevs_cms/templates/nikadevs-cms-layout-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 3, "set" => 5);
        static $filters = array("escape" => 14, "join" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 'join'],
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
