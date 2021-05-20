# Helpers

Extra add ons for Symfony forms

There might be better solutions than this one. But if you can use
these, please be my guest. The main goal is to keep these as simple as possible. If you want to help using these, please
be my guest.

## Use

- Use namespace SweetSallyBe\FormsBundle\Form\Type\DataListType to extend the default texttype to use it as a Datalist

Create file config\packages\forms.yaml
twig:
  paths:
    '%kernel.project_dir%/vendor/sweet-sally-be/forms-bundle/src/Form/View': FormsBundle
  form_themes:
    - '@FormsBundle/fields.html.twig'