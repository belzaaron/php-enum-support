# PHP Enums Support

This package aims to provide useful enum-type helpers for classes in PHP. This package currently adds two methods:

- `all()`
- `random()`

## How to use

Exend the class in your PHP project:

```php
<?php

namespace Your\Namespace;

use BelzAaron\EnumSupport\Enum;

class RoleTypes extends Enum
{
    public const Administrator = 1;
    public const Moderator = 2;
    public const Member = 3;
}
```

Then somewhere else in your application (for this example it is a database seeder class):

```php
<?php

namespace Database\Seeder;

use App\Models\Auth\User;
use Faker\Generator as Faker;
use Your\Namespace\RoleTypes;

class UsersTableSeeder
{
    /**
     * Seed the users table.
     * 
     * @return void
     */
    public function run(): void
    {
        for ($index = 1; $index <= 10; $index ++) { 
            User::create([
                'name' => Faker::fullName(),
                'email' => Faker::safeEmail(),
                'role_type_id' => RoleTypes::random(),
            ]);
        }
    }
}
```

Of course you can use this more valuably where you see fit.

### Other considerations

In PHP we do not have explict ENUM TYPES/CLASSES so therefore you'll be using public class constants as "enum" emulators. They still are type-agnostic, you can assign strings, floats, ints, and booleans to them and this package should function just as such. That being said you STILL NEED TO SET VALUES FOR THE CONSTANTS. As of now this package does not assign values to your constants to keep the value choice completely yours.