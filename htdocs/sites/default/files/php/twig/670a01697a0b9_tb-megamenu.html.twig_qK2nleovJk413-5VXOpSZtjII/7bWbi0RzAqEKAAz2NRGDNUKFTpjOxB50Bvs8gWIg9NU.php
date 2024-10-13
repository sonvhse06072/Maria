<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/tb_megamenu/templates/tb-megamenu.html.twig */
class __TwigTemplate_838362335604dbe3489974e228ded4ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (array_key_exists("css_style", $context)) {
            // line 2
            echo "<style type=\"text/css\">
  .tbm.animate .tbm-item > .tbm-submenu, .tbm.animate.slide .tbm-item > .tbm-submenu > div {
  ";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_style"] ?? null), 4, $this->source), "html", null, true);
            echo "
  }
</style>
";
        }
        // line 8
        echo "<nav ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 8, $this->source), "html", null, true);
        echo ">
  ";
        // line 9
        if ((($context["section"] ?? null) == "frontend")) {
            // line 10
            echo "    <button class=\"tbm-button\" type=\"button\">
      <span class=\"tbm-button-container\">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </span>
    </button>
    <div class=\"tbm-collapse ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($__internal_compile_0 = ($context["block_config"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["always-show-submenu"] ?? null) : null)) ? (" always-show") : ("")));
            echo "\">
  ";
        }
        // line 20
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 20, $this->source), "html", null, true);
        echo "
  ";
        // line 21
        if ((($context["section"] ?? null) == "frontend")) {
            // line 22
            echo "    </div>
  ";
        }
        // line 24
        echo "</nav>

<script>
";
        // line 28
        echo "if (window.matchMedia(\"(max-width: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["block_config"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["breakpoint"] ?? null) : null), 28, $this->source), "html", null, true);
        echo "px)\").matches) {
  document.getElementById(\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "\").classList.add('tbm--mobile');
}

";
        // line 33
        if ((($__internal_compile_2 = ($context["block_config"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["hide-mobile-menu"] ?? null) : null)) {
            // line 34
            echo "  document.getElementById('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "').classList.add('tbm--mobile-hide');
";
        }
        // line 36
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/tb_megamenu/templates/tb-megamenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  103 => 34,  101 => 33,  95 => 29,  90 => 28,  85 => 24,  81 => 22,  79 => 21,  74 => 20,  69 => 18,  59 => 10,  57 => 9,  52 => 8,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/tb_megamenu/templates/tb-megamenu.html.twig", "/srv/data/web/vhosts/test.marie-chantale.com/htdocs/modules/contrib/tb_megamenu/templates/tb-megamenu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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
