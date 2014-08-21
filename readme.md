### Bolt - Repeating Imagetype Field Extension

This extension adds a repeating image contenttype as an option to be used in contenttypes.yml

Configuration is acheived by adding this inside one of the contenttypes.

```
fields:
    images:
        type: imagerepeater
        subfields: [field1, field2, field3]
```

The result is a field that works in the same way as a current image field but stores the additional values entered as part of the data.

You can use the info in your twig templates as expected:

```
{% for image in images %}
  {{image.file}}
  {{image.field1}}
  {{image.field2}}
  {{image.field3}}
```
