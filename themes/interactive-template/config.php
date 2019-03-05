<?php

return [

  '#theme-name' => 'Interactive 3D Template',
  '#theme-key' => 'interactive-template',
  '#theme-version' => '1.0',
  '#ideaspace-version' => '>=1.0.0',
  '#theme-description' => 'Drop in your 3D models and interact with them!',
  '#theme-author-name' => 'TechLab',
  '#theme-author-email' => 'techlab@sydney.edu.au',
  '#theme-homepage' => 'https://trends.techlab.works',
  '#theme-keywords' => '3d, interact',
  '#theme-compatibility' => 'Google Cardboard, Daydream, Oculus, Samsung Gear VR, no headset',
  '#theme-view' => 'scene',

  '#content-types' => [

    'messages' => [
      '#label' => 'Messages',
      '#description' => 'Write some messages and view them in VR.',
      '#max-values' => 'infinite',
      '#fields' => [

        'message-text' => [
          '#label' => 'Message',
          '#description' => 'Enter some text.',
          '#help' => 'Enter some text',
          '#type' => 'textfield',
          '#maxlength' => 200,
          '#contentformat' => 'text', 
          '#required' => true,
        ],

      ], /* fields */

    ], /* messages */

  ], /* content types */

];


