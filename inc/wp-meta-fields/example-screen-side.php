<?php
/**
 * Meta Fields (Screen - Side)
 */
mf_add_meta_box( array(
	'id'       => 'example-all-fields-side',
	'title'    => __( 'Example - All Fields Side' ),
	'screen'   => array( 'post' ),
	'context'  => 'side',
	'priority' => 'default',
	'fields' => array(
		'prefix-side-1-text' => array(
			'type'        => 'text',
			'title'       => 'Text Field',
			'description' => 'Text Field field description goes here.',
			'hint' => 'Text Field field description goes here.',
			'default'     => '',
		),
		'prefix-side-1-textarea' => array(
			'type'        => 'textarea',
			'title'       => 'Textarea',
			'description' => 'Textarea field description goes here.',
			'hint' => 'Textarea field description goes here.',
			'default'     => '',
		),
		'prefix-side-1-password' => array(
			'type'        => 'password',
			'title'       => 'Password',
			'description' => 'Password field description goes here.',
			'hint' => 'Password field description goes here.',
			'default'     => '',
		),
		'prefix-side-1-color' => array(
			'type'        => 'color',
			'title'       => 'Color',
			'description' => 'Color field description goes here.',
			'hint' => 'Color field description goes here.',
			'default'     => '#f3f3f3',
		),
		'prefix-side-1-date' => array(
			'type'        => 'date',
			'title'       => 'Date',
			'description' => 'Date field description goes here.',
			'hint' => 'Date field description goes here.',
			'default'     => '',
		),
		'prefix-side-1-datetime-local' => array(
			'type'        => 'datetime-local',
			'title'       => 'Date Time Local',
			'description' => 'Date Time Local field description goes here.',
			'hint' => 'Date Time Local field description goes here.',
			'default'     => '',
		),
		'prefix-side-1-email' => array(
			'type'        => 'email',
			'title'       => 'Email',
			'description' => 'Email field description goes here.',
			'hint' => 'Email field description goes here.',
			'default'     => '',
		),
		'prefix-side-1-month' => array(
			'type'        => 'month',
			'title'       => 'Month',
			'description' => 'Month field description goes here.',
			'hint' => 'Month field description goes here.',
			'default'     => '',
		),
		'prefix-side-1-number' => array(
			'type'        => 'number',
			'title'       => 'Number',
			'description' => 'Number field description goes here.',
			'hint' => 'Number field description goes here.',
			'default'     => '',
		),
		'prefix-side-1-time' => array(
			'type'        => 'time',
			'title'       => 'Time',
			'description' => 'Time field description goes here.',
			'hint' => 'Time field description goes here.',
			'default'     => '',
		),
		'prefix-side-1-week' => array(
			'type'        => 'week',
			'title'       => 'Week',
			'description' => 'Week field description goes here.',
			'hint' => 'Week field description goes here.',
			'default'     => '',
		),
		'prefix-side-1-url' => array(
			'type'        => 'url',
			'title'       => 'Url',
			'description' => 'Url field description goes here.',
			'hint' => 'Url field description goes here.',
			'default'     => '',
		),
		'prefix-side-1-checkbox' => array(
			'type'        => 'checkbox',
			'title'       => 'Checkbox',
			'description' => 'Checkbox field description goes here.',
			'hint'        => 'Checkbox field description goes here.',
			'default'     => true,
		),
		'prefix-side-1-radio' => array(
			'type'        => 'radio',
			'title'       => 'Radio',
			'description' => 'Radio field description goes here.',
			'hint' => 'Radio field description goes here.',
			'default'     => 'one',
			'choices' => array(
				'one'   => 'One',
				'two'   => 'Two',
				'three' => 'Three',
			),
		),
		'prefix-side-1-select' => array(
			'type'        => 'select',
			'title'       => 'Select',
			'description' => 'Select field description goes here.',
			'hint' => 'Select field description goes here.',
			'default'     => 'one',
			'choices' => array(
				'one'   => 'One',
				'two'   => 'Two',
				'three' => 'Three',
			),
		),
	)
) );

/**
 * Meta Fields (Grouped) (Screen - Side)
 */
mf_add_meta_box( array(
	'id'       => 'example-all-fields-side-grouped',
	'title'    => __( 'Example - All Fields Side (Grouped)' ),
	'screen'   => array( 'post' ),
	'context'  => 'side',
	'priority' => 'default',
	'groups'   => array(
		array(
			'title'       => 'Group 1',
			'description' => 'Group Description',
			'fields'      => array(
				'prefix-side-group-1-text' => array(
					'type'        => 'text',
					'title'       => 'Text Field',
					'description' => 'Text Field field description goes here.',
					'hint' => 'Text Field field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-1-textarea' => array(
					'type'        => 'textarea',
					'title'       => 'Textarea',
					'description' => 'Textarea field description goes here.',
					'hint' => 'Textarea field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-1-password' => array(
					'type'        => 'password',
					'title'       => 'Password',
					'description' => 'Password field description goes here.',
					'hint' => 'Password field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-1-color' => array(
					'type'        => 'color',
					'title'       => 'Color',
					'description' => 'Color field description goes here.',
					'hint' => 'Color field description goes here.',
					'default'     => '#f3f3f3',
				),
				'prefix-side-group-1-date' => array(
					'type'        => 'date',
					'title'       => 'Date',
					'description' => 'Date field description goes here.',
					'hint' => 'Date field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-1-datetime-local' => array(
					'type'        => 'datetime-local',
					'title'       => 'Date Time Local',
					'description' => 'Date Time Local field description goes here.',
					'hint' => 'Date Time Local field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-1-email' => array(
					'type'        => 'email',
					'title'       => 'Email',
					'description' => 'Email field description goes here.',
					'hint' => 'Email field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-1-month' => array(
					'type'        => 'month',
					'title'       => 'Month',
					'description' => 'Month field description goes here.',
					'hint' => 'Month field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-1-number' => array(
					'type'        => 'number',
					'title'       => 'Number',
					'description' => 'Number field description goes here.',
					'hint' => 'Number field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-1-time' => array(
					'type'        => 'time',
					'title'       => 'Time',
					'description' => 'Time field description goes here.',
					'hint' => 'Time field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-1-week' => array(
					'type'        => 'week',
					'title'       => 'Week',
					'description' => 'Week field description goes here.',
					'hint' => 'Week field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-1-url' => array(
					'type'        => 'url',
					'title'       => 'Url',
					'description' => 'Url field description goes here.',
					'hint' => 'Url field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-1-checkbox' => array(
					'type'        => 'checkbox',
					'title'       => 'Checkbox',
					'description' => 'Checkbox field description goes here.',
					'hint'        => 'Checkbox field description goes here.',
					'default'     => true,
				),
				'prefix-side-group-1-radio' => array(
					'type'        => 'radio',
					'title'       => 'Radio',
					'description' => 'Radio field description goes here.',
					'hint' => 'Radio field description goes here.',
					'default'     => 'one',
					'choices' => array(
						'one'   => 'One',
						'two'   => 'Two',
						'three' => 'Three',
					),
				),
				'prefix-side-group-1-select' => array(
					'type'        => 'select',
					'title'       => 'Select',
					'description' => 'Select field description goes here.',
					'hint' => 'Select field description goes here.',
					'default'     => 'one',
					'choices' => array(
						'one'   => 'One',
						'two'   => 'Two',
						'three' => 'Three',
					),
				),
			),
		),
		array(
			'title'       => 'Group 2',
			'description' => 'Group 2 Description',
			'fields'      => array(
				'prefix-side-group-2-text' => array(
					'type'        => 'text',
					'title'       => 'Text Field',
					'description' => 'Text Field field description goes here.',
					'hint' => 'Text Field field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-2-textarea' => array(
					'type'        => 'textarea',
					'title'       => 'Textarea',
					'description' => 'Textarea field description goes here.',
					'hint' => 'Textarea field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-2-password' => array(
					'type'        => 'password',
					'title'       => 'Password',
					'description' => 'Password field description goes here.',
					'hint' => 'Password field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-2-color' => array(
					'type'        => 'color',
					'title'       => 'Color',
					'description' => 'Color field description goes here.',
					'hint' => 'Color field description goes here.',
					'default'     => '#f3f3f3',
				),
				'prefix-side-group-2-date' => array(
					'type'        => 'date',
					'title'       => 'Date',
					'description' => 'Date field description goes here.',
					'hint' => 'Date field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-2-datetime-local' => array(
					'type'        => 'datetime-local',
					'title'       => 'Date Time Local',
					'description' => 'Date Time Local field description goes here.',
					'hint' => 'Date Time Local field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-2-email' => array(
					'type'        => 'email',
					'title'       => 'Email',
					'description' => 'Email field description goes here.',
					'hint' => 'Email field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-2-month' => array(
					'type'        => 'month',
					'title'       => 'Month',
					'description' => 'Month field description goes here.',
					'hint' => 'Month field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-2-number' => array(
					'type'        => 'number',
					'title'       => 'Number',
					'description' => 'Number field description goes here.',
					'hint' => 'Number field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-2-time' => array(
					'type'        => 'time',
					'title'       => 'Time',
					'description' => 'Time field description goes here.',
					'hint' => 'Time field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-2-week' => array(
					'type'        => 'week',
					'title'       => 'Week',
					'description' => 'Week field description goes here.',
					'hint' => 'Week field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-2-url' => array(
					'type'        => 'url',
					'title'       => 'Url',
					'description' => 'Url field description goes here.',
					'hint' => 'Url field description goes here.',
					'default'     => '',
				),
				'prefix-side-group-2-checkbox' => array(
					'type'        => 'checkbox',
					'title'       => 'Checkbox',
					'description' => 'Checkbox field description goes here.',
					'hint'        => 'Checkbox field description goes here.',
					'default'     => true,
				),
				'prefix-side-group-2-radio' => array(
					'type'        => 'radio',
					'title'       => 'Radio',
					'description' => 'Radio field description goes here.',
					'hint' => 'Radio field description goes here.',
					'default'     => 'one',
					'choices' => array(
						'one'   => 'One',
						'two'   => 'Two',
						'three' => 'Three',
					),
				),
				'prefix-side-group-2-select' => array(
					'type'        => 'select',
					'title'       => 'Select',
					'description' => 'Select field description goes here.',
					'hint' => 'Select field description goes here.',
					'default'     => 'one',
					'choices' => array(
						'one'   => 'One',
						'two'   => 'Two',
						'three' => 'Three',
					),
				),
			)
		)
	)
));
