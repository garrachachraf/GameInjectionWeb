<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_13d2cab323493298aae66ba8fd42e4fc3803d2ad40cd5ce1ca51403000eda4e2 extends Twig_Template
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
        $__internal_7d91656b159ccda26b1f634593ed6238671313a216d8b77b0edbcecc54799486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d91656b159ccda26b1f634593ed6238671313a216d8b77b0edbcecc54799486->enter($__internal_7d91656b159ccda26b1f634593ed6238671313a216d8b77b0edbcecc54799486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f452f249f5a4468468c39e293a10dd63c36c1920392add21f65e21ebaf271f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f452f249f5a4468468c39e293a10dd63c36c1920392add21f65e21ebaf271f4e->enter($__internal_f452f249f5a4468468c39e293a10dd63c36c1920392add21f65e21ebaf271f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7d91656b159ccda26b1f634593ed6238671313a216d8b77b0edbcecc54799486->leave($__internal_7d91656b159ccda26b1f634593ed6238671313a216d8b77b0edbcecc54799486_prof);

        
        $__internal_f452f249f5a4468468c39e293a10dd63c36c1920392add21f65e21ebaf271f4e->leave($__internal_f452f249f5a4468468c39e293a10dd63c36c1920392add21f65e21ebaf271f4e_prof);

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
", "@Framework/Form/form_errors.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
