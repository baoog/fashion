<?php

/* profiles/contrib/social/themes/socialbase/templates/profile/profile--profile--hero.html.twig */
class __TwigTemplate_879ed98372fe0905cd4122375adce41a517263cd54596a8e1558e6e2cc9be807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 24, "trans" => 32);
        $filters = array("render" => 50, "without" => 77);
        $functions = array("attach_library" => 22);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('render', 'without'),
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

        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/hero"), "html", null, true));
        echo "

";
        // line 24
        if (($context["profile_hero_styled_image_url"] ?? null)) {
            // line 25
            echo "  <div style=\"background-image: url('";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_hero_styled_image_url"] ?? null), "html", null, true));
            echo "')\" class=\"cover cover-img cover-img-gradient\">
";
        } else {
            // line 27
            echo "  <div class=\"cover\">
";
        }
        // line 29
        echo "    <div class=\"hero__bgimage-overlay\"></div>
";
        // line 30
        if (($context["profile_edit_url"] ?? null)) {
            // line 31
            echo "  <div class=\"hero-action-button\">
    <a href=\"";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_edit_url"] ?? null), "html", null, true));
            echo "\" title=\"";
            echo t("Edit profile information", array());
            echo "\" class=\"btn btn-raised btn-default btn-floating\">
      <svg class=\"icon-medium\">
        <use xlink:href=\"#icon-edit\"></use>
      </svg>
    </a>
  </div>
";
        }
        // line 39
        echo "
  <div class=\"cover-wrap\">

    <header>
      ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_image", array()), "html", null, true));
        echo "
      <h1 class=\"page-title\">
        ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_name"] ?? null), "html", null, true));
        echo "
      </h1>
    </header>


  ";
        // line 50
        if ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array()))) || (($context["profile_contact_label"] ?? null) == "private_message"))) {
            // line 51
            echo "    <footer class=\"hero-footer\">
  ";
        }
        // line 53
        echo "
    <div class=\"hero-footer__text\">
      ";
        // line 55
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array()))) {
            // line 56
            echo "        <strong>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_function", array()), "html", null, true));
            echo "</strong>
      ";
        }
        // line 58
        echo "      ";
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array())) && $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array())))) {
            // line 59
            echo "      &nbsp;-&nbsp;
      ";
        }
        // line 61
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_profile_organization", array()), "html", null, true));
        echo "
    </div>

    ";
        // line 64
        if ((($context["profile_contact_label"] ?? null) == "private_message")) {
            // line 65
            echo "      <div class=\"hero-footer__cta\">
        <a href=\"";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profile_contact_url"] ?? null), "html", null, true));
            echo "\" class=\"btn btn-accent btn-lg btn-raised\">
          ";
            // line 67
            echo t("Private message", array());
            // line 68
            echo "        </a>
      </div>
    ";
        }
        // line 71
        echo "
  ";
        // line 72
        if ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", array())) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", array()))) || (($context["profile_contact_label"] ?? null) == "private_message"))) {
            // line 73
            echo "    </footer>
  ";
        }
        // line 75
        echo "
    ";
        // line 77
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_profile_first_name", "field_profile_last_name", "field_profile_image", "field_profile_function", "field_profile_organization"), "html", null, true));
        echo "
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/profile/profile--profile--hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 77,  156 => 75,  152 => 73,  150 => 72,  147 => 71,  142 => 68,  140 => 67,  136 => 66,  133 => 65,  131 => 64,  124 => 61,  120 => 59,  117 => 58,  111 => 56,  109 => 55,  105 => 53,  101 => 51,  99 => 50,  91 => 45,  86 => 43,  80 => 39,  68 => 32,  65 => 31,  63 => 30,  60 => 29,  56 => 27,  50 => 25,  48 => 24,  43 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/themes/socialbase/templates/profile/profile--profile--hero.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\profile\\profile--profile--hero.html.twig");
    }
}
