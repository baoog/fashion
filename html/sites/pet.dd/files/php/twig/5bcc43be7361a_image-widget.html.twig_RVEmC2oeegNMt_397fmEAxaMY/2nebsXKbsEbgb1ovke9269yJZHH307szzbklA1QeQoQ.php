<?php

/* profiles/contrib/social/themes/socialbase/templates/file/image-widget.html.twig */
class __TwigTemplate_9061a0d0aa9b91641926dcb7fd26a378dd5f105a6cc4afc6a471e11fc75a838b extends Twig_Template
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
        $tags = array("if" => 16, "set" => 17, "trans" => 49);
        $filters = array("without" => 32);
        $functions = array("attach_library" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'trans'),
                array('without'),
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

        // line 15
        echo "
";
        // line 16
        if ((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $this->getAttribute($this->getAttribute(($context["data"] ?? null), "upload", array()), "#id", array(), "array")) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "edit-field-post-image-0-upload") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) {
            // line 17
            echo "  ";
            $context["in_post"] = true;
        } else {
            // line 19
            echo "  ";
            $context["in_post"] = false;
        }
        // line 21
        echo "
";
        // line 22
        if ($this->getAttribute(($context["data"] ?? null), "preview", array())) {
            // line 23
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/image-widget"), "html", null, true));
            echo "
  <div";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "image-widget"), "method"), "removeClass", array(0 => "clearfix"), "method"), "html", null, true));
            echo ">
    <div class=\"preview\">
      ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["data"] ?? null), "preview", array()), "html", null, true));
            echo "
    </div>
    <div class=\"data image-widget-data\">

      ";
            // line 30
            if (($context["in_post"] ?? null)) {
                // line 31
                echo "        ";
                // line 32
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["data"] ?? null), "preview", "image_crop", ("file_" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? null), "fids", array()), "#value", array(), "array"), 0, array(), "array")), "remove_button"), "html", null, true));
                echo "
      ";
            } else {
                // line 34
                echo "        ";
                // line 35
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["data"] ?? null), "preview", "image_crop"), "html", null, true));
                echo "
      ";
            }
            // line 37
            echo "
    </div>
  </div>

  ";
            // line 41
            if (($context["in_post"] ?? null)) {
                // line 42
                echo "    ";
                // line 43
                echo "    <div class=\"hidden\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["data"] ?? null), "remove_button", array()), "html", null, true));
                echo "</div>
    <button type=\"button\" id=\"post-photo-remove\" class=\"btn--post-remove-image\">
      <svg class=\"btn-icon\">
        <use id=\"btnicon\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-close\"></use>
      </svg>
      <span class=\"sr-only\">
        ";
                // line 49
                echo t("Remove image", array());
                // line 50
                echo "      </span>
    </button>

  ";
            } else {
                // line 54
                echo "
    ";
                // line 55
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("image_widget_crop/cropper"), "html", null, true));
                echo "
    ";
                // line 56
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["data"] ?? null), "image_crop", array()), "html", null, true));
                echo "

  ";
            }
            // line 59
            echo "
";
        } else {
            // line 61
            echo "
  ";
            // line 62
            if (($context["in_post"] ?? null)) {
                // line 63
                echo "
    ";
                // line 65
                echo "    <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "hidden"), "method"), "html", null, true));
                echo ">
      ";
                // line 66
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["data"] ?? null), "html", null, true));
                echo "
    </div>
    <button type=\"button\" id=\"post-photo-add\" class=\"btn btn-default\">
      <svg class=\"btn-icon\">
        <use id=\"btnicon\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-plus\"></use>
      </svg>
      <span>
        ";
                // line 73
                echo t("Add image", array());
                // line 74
                echo "      </span>
    </button>

  ";
            } else {
                // line 78
                echo "
    <div";
                // line 79
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                echo ">
      ";
                // line 80
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["data"] ?? null), "html", null, true));
                echo "
    </div>

  ";
            }
            // line 84
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/file/image-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 84,  179 => 80,  175 => 79,  172 => 78,  166 => 74,  164 => 73,  154 => 66,  149 => 65,  146 => 63,  144 => 62,  141 => 61,  137 => 59,  131 => 56,  127 => 55,  124 => 54,  118 => 50,  116 => 49,  106 => 43,  104 => 42,  102 => 41,  96 => 37,  90 => 35,  88 => 34,  82 => 32,  80 => 31,  78 => 30,  71 => 26,  66 => 24,  61 => 23,  59 => 22,  56 => 21,  52 => 19,  48 => 17,  46 => 16,  43 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/themes/socialbase/templates/file/image-widget.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\file\\image-widget.html.twig");
    }
}
