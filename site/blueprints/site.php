<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: single
fields:
  title:
    label: Website title
    type:  text
  keywords:
    label: Keywords for SEO
    type:  tags
  description:
    label: Meta description for SEO
    type:  textarea
  line-a:
    type: line
  menuItems:
    label: Menu items
    type: structure
    entry: >
      {{ label }}<br />
      {{ hyperlink }}
    fields:
      label:
        label: Menu Item Text
        type: text
      hyperlink:
        label: Menu Item Link
        type: url
      target:
        label: Target blank
        type: checkbox
        text: Open in a new window