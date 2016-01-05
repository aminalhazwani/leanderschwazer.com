<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
fields:
  title:
    label: Title
    type:  text
  introtext:
    label: Introduction text 
    type:  textarea

  firstcol:
    label: First coloumn content
    type: textarea
  secondcol:
    label: Second coloumn content
    type: textarea
  thirdcol:
    label: Third coloumn content
    type: textarea

  line-a:
    type: line

  descriptioneng:
    label: English description
    type: textarea
  descriptiondeu:
    label: German description
    type: textarea
  descriptionita:
    label: Italian description
    type: textarea

  line-b:
    type: line

  soloshows:
    label: Solo Shows
    type: textarea
  groupexhibits:
    label: Group Exhibition
    type: textarea
  awards:
    label: Awards
    type: textarea
  collections:
    label: Public Collections
    type: textarea
  credits:
    label: Credits
    type: textarea
  legal:
    label: Legal
    type: textarea

files:
  sortable: true
  fields: 
    alt: 
      label: Alt Text
      type: text