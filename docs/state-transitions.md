# State Transitions Guide

## Overview
This document outlines the standards and patterns for implementing state transitions in the application.

## Transition Class Structure

### Required Structure
```php
class ExampleTransition extends Transition
{
    public function __construct(
        public Model $model,
        public ?string $message = ''
    ) {}

    public function handle(): Model
    {
        // Transition logic here
        return $this->model;
    }
}
```

### Key Points
- Always extend `Spatie\ModelStates\Transition`
- Constructor must accept the model as first parameter
- Optional message parameter with empty string as default
- `handle()` must return the updated model

## Implementation Notes

### Required Parameters
1. `$model`: The model instance being transitioned
2. `$message`: Optional message for the transition (default: empty string)

### File Naming
- Use `PascalCase` for transition class names
- Suffix with `Transition` (e.g., `ActiveToSuspendedTransition`)
- Place in `app/States/{ModelName}/Transitions/`

### Best Practices
- Keep transition logic simple and focused
- Use type hints for all parameters
- Document complex transitions with PHPDoc blocks
- Always provide default values for optional parameters

## Related Documentation
- [State Management](./state-management.md)
- [SelectStateColumn Documentation](./select-state-column.md)
<<<<<<< .merge_file_GGBz52
<<<<<<< HEAD
=======
<<<<<<< HEAD
- [SelectStateColumn Documentation](./select-state-column.md)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
# State Transitions Guide
<<<<<<< HEAD
## Overview
This document outlines the standards and patterns for implementing state transitions in the application.
## Transition Class Structure
=======
=======
# State Transitions Guide
>>>>>>> 804451c (Lint)
=======
# State Transitions Guide
>>>>>>> .merge_file_zMlsxQ

## Overview
This document outlines the standards and patterns for implementing state transitions in the application.

## Transition Class Structure

<<<<<<< .merge_file_GGBz52
<<<<<<< HEAD
<<<<<<< .merge_file_ZLjIU6
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
- [SelectStateColumn Documentation](./select-state-column.md)
>>>>>>> laraxot/dev
=======
=======
<<<<<<< HEAD
- [SelectStateColumn Documentation](./select-state-column.md)
>>>>>>> 804451c (Lint)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [SelectStateColumn Documentation](./select-state-column.md)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [SelectStateColumn Documentation](./select-state-column.md)
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- [SelectStateColumn Documentation](./select-state-column.md)
# State Transitions Guide
## Overview
This document outlines the standards and patterns for implementing state transitions in the application.
## Transition Class Structure
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_nei5JC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_zMlsxQ
### Required Structure
```php
class ExampleTransition extends Transition
{
    public function __construct(
        public Model $model,
        public ?string $message = ''
    ) {}
<<<<<<< .merge_file_GGBz52
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_ZLjIU6

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_nei5JC
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_zMlsxQ
    public function handle(): Model
    {
        // Transition logic here
        return $this->model;
    }
}
```
<<<<<<< .merge_file_GGBz52
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_ZLjIU6

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_nei5JC
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_zMlsxQ
### Key Points
- Always extend `Spatie\ModelStates\Transition`
- Constructor must accept the model as first parameter
- Optional message parameter with empty string as default
- `handle()` must return the updated model
<<<<<<< .merge_file_GGBz52
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_ZLjIU6
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Implementation Notes
### Required Parameters
1. `$model`: The model instance being transitioned
2. `$message`: Optional message for the transition (default: empty string)
=======
>>>>>>> .merge_file_nei5JC
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_zMlsxQ

## Implementation Notes

### Required Parameters
1. `$model`: The model instance being transitioned
2. `$message`: Optional message for the transition (default: empty string)

<<<<<<< .merge_file_GGBz52
<<<<<<< HEAD
<<<<<<< .merge_file_ZLjIU6
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
## Implementation Notes
### Required Parameters
1. `$model`: The model instance being transitioned
2. `$message`: Optional message for the transition (default: empty string)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_nei5JC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_zMlsxQ
### File Naming
- Use `PascalCase` for transition class names
- Suffix with `Transition` (e.g., `ActiveToSuspendedTransition`)
- Place in `app/States/{ModelName}/Transitions/`
<<<<<<< .merge_file_GGBz52
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_ZLjIU6

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======

>>>>>>> .merge_file_nei5JC
=======

=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======

>>>>>>> .merge_file_zMlsxQ
### Best Practices
- Keep transition logic simple and focused
- Use type hints for all parameters
- Document complex transitions with PHPDoc blocks
- Always provide default values for optional parameters
<<<<<<< .merge_file_GGBz52
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_ZLjIU6
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
## Related Documentation
- [State Management](./state-management.md)
=======
>>>>>>> .merge_file_nei5JC
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_zMlsxQ

## Related Documentation
- [State Management](./state-management.md)
- [SelectStateColumn Documentation](./select-state-column.md)
<<<<<<< .merge_file_GGBz52
<<<<<<< HEAD
<<<<<<< .merge_file_ZLjIU6
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
## Related Documentation
- [State Management](./state-management.md)
<<<<<<< HEAD
=======
- [SelectStateColumn Documentation](./select-state-column.md)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- [SelectStateColumn Documentation](./select-state-column.md)
>>>>>>> f6fcbb6f (Fix merge conflict in .gitattributes by removing redundant lines and ensuring proper exclusion of image formats from text processing.)
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_nei5JC
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_zMlsxQ
