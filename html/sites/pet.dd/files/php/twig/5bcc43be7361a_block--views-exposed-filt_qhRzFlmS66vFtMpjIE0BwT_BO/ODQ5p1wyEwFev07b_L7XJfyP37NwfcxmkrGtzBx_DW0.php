<?php

/* profiles/contrib/social/themes/socialbase/templates/block/block--views-exposed-filter-block.html.twig */
class __TwigTemplate_aa67eb0157b10867611acfc85595641ec25a13a561488bfb83ea03d088001443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("trans" => 56, "if" => 63, "block" => 80);
        $filters = array();
        $functions = array("attach_library" => 48);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans', 'if', 'block'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/offcanvas"), "html", null, true));
        echo "

<div";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  <div class=\"btn--offcanvas-trigger\">
    <a href=\"#block-filter\" class=\"btn btn-default btn-raised \">
      <svg class=\"btn-icon\">
        <use xlink:href=\"#icon-filter_list\"></use>
      </svg>
      ";
        // line 56
        echo t("Filter", array());
        // line 57
        echo "    </a>
  </div>
  <div id=\"block-filter\" class=\"off-canvas off-canvas-right off-canvas-xs-only\">
    <div class=\"offcanvas-head\">

    ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 63
        if (($context["label"] ?? null)) {
            // line 64
            echo "      <header";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "complementary-title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</header>
    ";
        }
        // line 66
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

      <div class=\"offcanvas-tools\">
        <a href=\"#\" class=\"btn btn-icon-toggle pull-right\">
          <svg class=\"pull-left btn-icon icon-black\">
            <title> Close</title>
            <use xlink:href=\"#icon-close\"></use>
          </svg>
        </a>
      </div>
    </div>

    <div class=\"offcanvas-body\">

      ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "
    </div>
  </div>
</div>
";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
        // line 81
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/block/block--views-exposed-filter-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 81,  109 => 80,  101 => 83,  99 => 80,  81 => 66,  73 => 64,  71 => 63,  67 => 62,  60 => 57,  58 => 56,  49 => 50,  44 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/themes/socialbase/templates/block/block--views-exposed-filter-block.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\block\\block--views-exposed-filter-block.html.twig");
    }
}
