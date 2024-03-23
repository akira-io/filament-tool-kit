<?php

it('will not use debugging functions')
    ->expect(['dd', 'dump', 'ray'])
    ->each->not->toBeUsed();

it('expect export columns to have export column suffix')
    ->expect('Akira\FilamentToolKit\Export\Columns')
    ->toHaveSuffix('ExportColumn')
    ->toHaveMethod('make');

it('expect form date pickers to have date picker suffix')
    ->expect('Akira\FilamentToolKit\Form\DatePickers')
    ->toHaveSuffix('DatePicker')
    ->toHaveMethod('make');

it('expect form inputs to have text input suffix')
    ->expect('Akira\FilamentToolKit\Form\Inputs')
    ->toHaveSuffix('TextInput')
    ->toHaveMethod('make');

it('expect export  form toggles to have text input suffix')
    ->expect('Akira\FilamentToolKit\Form\Toggles')
    ->toHaveSuffix('Toggle')
    ->toHaveMethod('make');

it('expect export form uploads to have select input suffix')
    ->expect('Akira\FilamentToolKit\Form\Uploads')
    ->toHaveSuffix('FileUpload')
    ->toHaveMethod('make');
