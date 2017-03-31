<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e9c8a61fc66995300396b5c3421d12e9c82c59cd91c55214379977fe7a7eb383 extends Twig_Template
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
        $__internal_509e1c74096c72d5c006c85ba575e1d3de863073af56965e512136d36a51cc8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509e1c74096c72d5c006c85ba575e1d3de863073af56965e512136d36a51cc8f->enter($__internal_509e1c74096c72d5c006c85ba575e1d3de863073af56965e512136d36a51cc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_42dfdd8f1fb45afec624a641ccc52ee3e862d3948c2276d0892ebad1f4e8fe74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42dfdd8f1fb45afec624a641ccc52ee3e862d3948c2276d0892ebad1f4e8fe74->enter($__internal_42dfdd8f1fb45afec624a641ccc52ee3e862d3948c2276d0892ebad1f4e8fe74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_509e1c74096c72d5c006c85ba575e1d3de863073af56965e512136d36a51cc8f->leave($__internal_509e1c74096c72d5c006c85ba575e1d3de863073af56965e512136d36a51cc8f_prof);

        
        $__internal_42dfdd8f1fb45afec624a641ccc52ee3e862d3948c2276d0892ebad1f4e8fe74->leave($__internal_42dfdd8f1fb45afec624a641ccc52ee3e862d3948c2276d0892ebad1f4e8fe74_prof);

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
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
