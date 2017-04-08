<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4da97ee7cdf373f654ff3a3a17e18f2c2ed01f6ef3a8386aa6162767b0452e08 extends Twig_Template
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
        $__internal_c49604bf681ad6f9d457217e7cdb942a7f93a0ba96e626643c50dd42946081a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49604bf681ad6f9d457217e7cdb942a7f93a0ba96e626643c50dd42946081a9->enter($__internal_c49604bf681ad6f9d457217e7cdb942a7f93a0ba96e626643c50dd42946081a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4f6e530db2d8ca2a0756f920bc774ac6b0226b54a5d0b86af1d77bdc263fb155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6e530db2d8ca2a0756f920bc774ac6b0226b54a5d0b86af1d77bdc263fb155->enter($__internal_4f6e530db2d8ca2a0756f920bc774ac6b0226b54a5d0b86af1d77bdc263fb155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c49604bf681ad6f9d457217e7cdb942a7f93a0ba96e626643c50dd42946081a9->leave($__internal_c49604bf681ad6f9d457217e7cdb942a7f93a0ba96e626643c50dd42946081a9_prof);

        
        $__internal_4f6e530db2d8ca2a0756f920bc774ac6b0226b54a5d0b86af1d77bdc263fb155->leave($__internal_4f6e530db2d8ca2a0756f920bc774ac6b0226b54a5d0b86af1d77bdc263fb155_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
