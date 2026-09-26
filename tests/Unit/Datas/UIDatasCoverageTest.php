<?php

declare(strict_types=1);

namespace Modules\UI\Tests\Unit\Datas;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_wUCVKj
=======
use Modules\UI\Data\UserData as DataUserData;
>>>>>>> laraxot/dev
=======
use Modules\UI\Data\UserData as DataUserData;
=======
<<<<<<< HEAD
use Modules\UI\Data\UserData as DataUserData;
=======
<<<<<<< HEAD
=======
use Modules\UI\Data\UserData as DataUserData;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_qQDzbD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
use Modules\UI\Datas\SliderData;
use Modules\UI\Datas\SliderDataCollection;
use Modules\UI\Datas\UserData;
use Modules\UI\Tests\TestCase;
use PHPUnit\Framework\Assert;
use Spatie\LaravelData\Data;

uses(TestCase::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_wUCVKj
<<<<<<< HEAD
=======
<<<<<<< .merge_file_WrnTmc
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> .merge_file_qQDzbD
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
// Laraxot module file — see docs/wiki for domain contract.
<<<<<<< .merge_file_wUCVKj
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_MU56B3
>>>>>>> .merge_file_qQDzbD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev

it('SliderData can be instantiated with all fields', function (): void {
    $data = new SliderData(
        desktop_thumbnail: '/img/desktop.jpg',
        mobile_thumbnail: '/img/mobile.jpg',
        desktop_thumbnail_webp: '/img/desktop.webp',
        mobile_thumbnail_webp: '/img/mobile.webp',
        link: '/events',
        title: 'Laravel Meetup',
        short_description: 'Join us!',
        description: 'Full description here',
        action_text: 'Register Now',
    );

    Assert::assertInstanceOf(SliderData::class, $data);
    Assert::assertSame('/img/desktop.jpg', $data->desktop_thumbnail);
    Assert::assertSame('/img/mobile.jpg', $data->mobile_thumbnail);
    Assert::assertSame('/events', $data->link);
    Assert::assertSame('Laravel Meetup', $data->title);
    Assert::assertSame('Register Now', $data->action_text);
});

it('SliderData sets short_description from description', function (): void {
    $data = new SliderData(
        desktop_thumbnail: null,
        mobile_thumbnail: null,
        desktop_thumbnail_webp: null,
        mobile_thumbnail_webp: null,
        link: null,
        title: null,
        short_description: null,
        description: 'My description',
        action_text: null,
    );

    Assert::assertSame('My description', $data->short_description);
});

it('SliderData can be instantiated with nulls', function (): void {
    $data = new SliderData(
        desktop_thumbnail: null,
        mobile_thumbnail: null,
        desktop_thumbnail_webp: null,
        mobile_thumbnail_webp: null,
        link: null,
        title: null,
        short_description: null,
        description: null,
        action_text: null,
    );

    Assert::assertInstanceOf(SliderData::class, $data);
    Assert::assertNull($data->desktop_thumbnail);
});

it('SliderDataCollection can be instantiated', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $collection = new SliderDataCollection();
=======
<<<<<<< .merge_file_wUCVKj
    $collection = new SliderDataCollection;
=======
<<<<<<< HEAD
    $collection = new SliderDataCollection;
=======
<<<<<<< HEAD
    $collection = new SliderDataCollection();
=======
    $collection = new SliderDataCollection;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_qQDzbD
>>>>>>> laraxot/dev
=======
    $collection = new SliderDataCollection();
>>>>>>> laraxot/dev
=======
    $collection = new SliderDataCollection();
>>>>>>> laraxot/dev

    Assert::assertInstanceOf(SliderDataCollection::class, $collection);
});

it('SliderDataCollection is a Spatie Data class', function (): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_wUCVKj
=======
    $collection = new SliderDataCollection();
=======
<<<<<<< HEAD
    $collection = new SliderDataCollection;
=======
<<<<<<< HEAD
>>>>>>> .merge_file_qQDzbD
    $collection = new SliderDataCollection();
=======
    $collection = new SliderDataCollection;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_wUCVKj
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_qQDzbD
=======
    $collection = new SliderDataCollection();
>>>>>>> laraxot/dev
=======
    $collection = new SliderDataCollection();
>>>>>>> laraxot/dev

    Assert::assertInstanceOf(Data::class, $collection);
});

it('UI Datas UserData can be instantiated', function (): void {
    $data = new UserData(
        id: 1,
        name: 'Mario Rossi',
        email: 'mario@example.com',
        avatar: null,
        role: 'admin',
        permissions: ['view', 'edit'],
        settings: ['theme' => 'dark'],
    );

    Assert::assertInstanceOf(UserData::class, $data);
    Assert::assertSame(1, $data->id);
    Assert::assertSame('Mario Rossi', $data->name);
    Assert::assertSame('mario@example.com', $data->email);
    Assert::assertNull($data->avatar);
    Assert::assertSame('admin', $data->role);
    Assert::assertSame(['view', 'edit'], $data->permissions);
    Assert::assertSame(['theme' => 'dark'], $data->settings);
});

it('UI Datas UserData is a Spatie Data class', function (): void {
    $data = new UserData(1, 'Test', 'test@example.com', null, null, [], []);

    Assert::assertInstanceOf(Data::class, $data);
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< .merge_file_wUCVKj
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_qQDzbD

it('UI Data UserData can be instantiated', function (): void {
    $data = new DataUserData(
        id: 42,
        name: 'Luigi Verdi',
        email: 'luigi@example.com',
        avatar: 'avatar.png',
        role: 'user',
        permissions: [],
        settings: [],
    );

    Assert::assertInstanceOf(DataUserData::class, $data);
    Assert::assertSame(42, $data->id);
    Assert::assertSame('Luigi Verdi', $data->name);
    Assert::assertSame('luigi@example.com', $data->email);
    Assert::assertSame('avatar.png', $data->avatar);
});

it('UI Data UserData is a Spatie Data class', function (): void {
    $data = new DataUserData(1, 'Test', 'test@example.com', null, null, [], []);

    Assert::assertInstanceOf(Data::class, $data);
});
<<<<<<< .merge_file_wUCVKj
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_qQDzbD
>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
