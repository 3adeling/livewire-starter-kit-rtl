@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
])

@php
$classes = Flux::classes()
    ->add('group h-5 w-8 relative inline-flex items-center outline-offset-2')
    ->add('rounded-full')
    ->add('transition')
    ->add('bg-zinc-800/15 [&[disabled]]:opacity-50 dark:bg-transparent dark:border dark:border-white/20 dark:[&[disabled]]:border-white/10')
    ->add('[print-color-adjust:exact]')
    ->add([
        'data-checked:bg-(--color-accent)',
        'data-checked:border-0',
    ])
    ;

$indicatorClasses = Flux::classes()
    ->add('size-3.5')
    ->add('rounded-full')
    ->add('transition ltr:translate-x-[3px] rtl:-translate-x-[3px] ltr:dark:translate-x-[2px] ltr:dark:-translate-x-[2px]')
    ->add('bg-white')
    ->add([
        'ltr:group-data-checked:translate-x-[15px] rtl:group-data-checked:-translate-x-[15px]',
        'group-data-checked:bg-(--color-accent-foreground)',
    ]);
@endphp

<flux:with-reversed-inline-field :$attributes>
    <ui-switch {{ $attributes->class($classes) }} data-flux-control data-flux-switch>
        <span class="{{ \Illuminate\Support\Arr::toCssClasses($indicatorClasses) }}"></span>
    </ui-switch>
</flux:with-reversed-inline-field>
