@php
// UI Blade view — see Modules/UI/docs/wiki.
@endphp

@php
// UI Blade view — see Modules/UI/docs/wiki.
@endphp

@php
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
// UI Blade view — see Modules/UI/docs/wiki.
@endphp

<?php

declare(strict_types=1);

?>
<div class="bg-gray-50">
    <div class="relative bg-indigo-600">
      <!-- Overlapping background -->
      <div aria-hidden="true" class="absolute bottom-0 hidden h-6 w-full bg-gray-50 lg:block"></div>

      <div class="relative mx-auto max-w-2xl px-6 pt-16 text-center sm:pt-32 lg:max-w-7xl lg:px-8">
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
          <span class="block lg:inline">Simple pricing,</span>
          <span class="block lg:inline">no commitment.</span>
        </h1>
        <p class="mt-4 text-xl text-indigo-100">Everything you need, nothing you don't. Pick a plan that best suits your business.</p>
      </div>

      <h2 class="sr-only">Plans</h2>

      <!-- Toggle -->
      <div class="relative mt-12 flex justify-center sm:mt-16">
        <div class="flex rounded-lg bg-indigo-700 p-0.5">
          <button type="button" class="relative whitespace-nowrap rounded-md border-indigo-700 bg-white px-6 py-2 text-sm font-medium text-indigo-700 shadow-sm hover:bg-indigo-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-700">Monthly billing</button>
          <button type="button" class="relative ml-0.5 whitespace-nowrap rounded-md border border-transparent px-6 py-2 text-sm font-medium text-indigo-200 hover:bg-indigo-800 focus:z-10 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-700">Yearly billing</button>
        </div>
      </div>

      <!-- Cards -->
      <div class="relative mx-auto mt-8 max-w-2xl px-6 pb-8 sm:mt-12 lg:max-w-7xl lg:px-8 lg:pb-0">
        <!-- Decorative background -->
        <div aria-hidden="true" class="absolute inset-0 bottom-6 left-8 right-8 top-4 hidden rounded-tl-lg rounded-tr-lg bg-indigo-700 lg:block"></div>

        <div class="relative space-y-6 lg:grid lg:grid-cols-3 lg:space-y-0">
          <div class="bg-indigo-700 lg:bg-transparent rounded-lg px-6 pt-6 pb-3 lg:px-8 lg:pt-12">
            <div>
              <h3 class="text-white text-base font-semibold">Starter</h3>
              <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                <div class="mt-3 flex items-center">
                  <p class="text-white text-4xl font-bold tracking-tight">$5</p>
                  <div class="ml-4">
                    <p class="text-white text-sm">USD / mo</p>
                    <p class="text-indigo-200 text-sm">Billed yearly ($56)</p>
                  </div>
                </div>
                <a href="#" class="bg-white text-indigo-600 hover:bg-indigo-50 mt-6 inline-block w-full rounded-md border border-transparent py-2 px-8 text-center text-sm font-medium shadow-sm sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Starter</a>
              </div>
            </div>
            <h4 class="sr-only">Features</h4>
            <ul role="list" class="divide-indigo-500 divide-opacity-75 border-indigo-500 mt-7 divide-y border-t lg:border-t-0">
              <li class="flex items-center py-3">
                <svg class="text-indigo-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-white ml-3 text-sm font-medium">Basic invoicing</span>
              </li>
              <li class="flex items-center py-3">
                <svg class="text-indigo-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-white ml-3 text-sm font-medium">Easy to use accounting</span>
              </li>
              <li class="flex items-center py-3">
                <svg class="text-indigo-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-white ml-3 text-sm font-medium">Mutli-accounts</span>
              </li>
            </ul>
          </div>
          <div class="bg-white shadow-md ring-2 ring-indigo-700 rounded-lg px-6 pt-6 pb-3 lg:px-8 lg:pt-12">
            <div>
              <h3 class="text-indigo-600 text-base font-semibold">Scale</h3>
              <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                <div class="mt-3 flex items-center">
                  <p class="text-indigo-600 text-4xl font-bold tracking-tight">$19</p>
                  <div class="ml-4">
                    <p class="text-gray-700 text-sm">USD / mo</p>
                    <p class="text-gray-500 text-sm">Billed yearly ($220)</p>
                  </div>
                </div>
                <a href="#" class="bg-indigo-600 text-white hover:bg-indigo-700 mt-6 inline-block w-full rounded-md border border-transparent py-2 px-8 text-center text-sm font-medium shadow-sm sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Scale</a>
              </div>
            </div>
            <h4 class="sr-only">Features</h4>
            <ul role="list" class="divide-gray-200 border-gray-200 mt-7 divide-y border-t lg:border-t-0">
              <li class="flex items-center py-3">
                <svg class="text-indigo-500 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-600 ml-3 text-sm font-medium">Advanced invoicing</span>
              </li>
              <li class="flex items-center py-3">
                <svg class="text-indigo-500 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-600 ml-3 text-sm font-medium">Easy to use accounting</span>
              </li>
              <li class="flex items-center py-3">
                <svg class="text-indigo-500 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-600 ml-3 text-sm font-medium">Mutli-accounts</span>
              </li>
              <li class="flex items-center py-3">
                <svg class="text-indigo-500 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-600 ml-3 text-sm font-medium">Tax planning toolkit</span>
              </li>
              <li class="flex items-center py-3">
                <svg class="text-indigo-500 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-600 ml-3 text-sm font-medium">VAT &amp; VATMOSS filing</span>
              </li>
              <li class="flex items-center py-3">
                <svg class="text-indigo-500 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-600 ml-3 text-sm font-medium">Free bank transfers</span>
              </li>
            </ul>
          </div>
          <div class="bg-indigo-700 lg:bg-transparent rounded-lg px-6 pt-6 pb-3 lg:px-8 lg:pt-12">
            <div>
              <h3 class="text-white text-base font-semibold">Growth</h3>
              <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                <div class="mt-3 flex items-center">
                  <p class="text-white text-4xl font-bold tracking-tight">$12</p>
                  <div class="ml-4">
                    <p class="text-white text-sm">USD / mo</p>
                    <p class="text-indigo-200 text-sm">Billed yearly ($140)</p>
                  </div>
                </div>
                <a href="#" class="bg-white text-indigo-600 hover:bg-indigo-50 mt-6 inline-block w-full rounded-md border border-transparent py-2 px-8 text-center text-sm font-medium shadow-sm sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Growth</a>
              </div>
            </div>
            <h4 class="sr-only">Features</h4>
            <ul role="list" class="divide-indigo-500 divide-opacity-75 border-indigo-500 mt-7 divide-y border-t lg:border-t-0">
              <li class="flex items-center py-3">
                <svg class="text-indigo-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-white ml-3 text-sm font-medium">Basic invoicing</span>
              </li>
              <li class="flex items-center py-3">
                <svg class="text-indigo-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-white ml-3 text-sm font-medium">Easy to use accounting</span>
              </li>
              <li class="flex items-center py-3">
                <svg class="text-indigo-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-white ml-3 text-sm font-medium">Mutli-accounts</span>
              </li>
              <li class="flex items-center py-3">
                <svg class="text-indigo-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                </svg>
                <span class="text-white ml-3 text-sm font-medium">Tax planning toolkit</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Feature comparison (up to lg) -->
    <section aria-labelledby="mobile-comparison-heading" class="lg:hidden">
      <h2 id="mobile-comparison-heading" class="sr-only">Feature comparison</h2>

      <div class="mx-auto max-w-2xl space-y-16 px-6 py-16">
        <div class="border-t border-gray-200" key="plan.title">
          <div class="border-transparent -mt-px border-t-2 pt-6 sm:w-1/2">
            <h3 class="text-gray-900 text-sm font-bold">Starter</h3>
            <p class="mt-2 text-sm text-gray-500">All your essential business finances, taken care of.</p>
          </div>
          <h4 class="mt-10 text-sm font-bold text-gray-900">Catered for business</h4>

          <div class="relative mt-6">
            <!-- Fake card background -->
            <div aria-hidden="true" class="pointer-events-none absolute inset-0 hidden sm:block">
              <div class="shadow absolute right-0 h-full w-1/2 rounded-lg bg-white"></div>
            </div>

            <div class="shadow ring-1 ring-black ring-opacity-5 relative rounded-lg bg-white py-3 px-4 sm:rounded-none sm:bg-transparent sm:p-0 sm:shadow-none sm:ring-0">
              <dl class="divide-y divide-gray-200">
                <div class="flex items-center justify-between py-3 sm:grid sm:grid-cols-2">
                  <dt class="pr-4 text-sm font-medium text-gray-600">Tax Savings</dt>
                  <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                    <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Yes</span>
                  </dd>
                </div>
                <div class="flex items-center justify-between py-3 sm:grid sm:grid-cols-2">
                  <dt class="pr-4 text-sm font-medium text-gray-600">Easy to use accounting</dt>
                  <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                    <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Yes</span>
                  </dd>
                </div>
                <div class="flex items-center justify-between py-3 sm:grid sm:grid-cols-2">
                  <dt class="pr-4 text-sm font-medium text-gray-600">Multi-accounts</dt>
                  <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                    <span class="text-gray-900 text-sm font-medium">3 accounts</span>
                  </dd>
                </div>
                <div class="flex items-center justify-between py-3 sm:grid sm:grid-cols-2">
                  <dt class="pr-4 text-sm font-medium text-gray-600">Invoicing</dt>
                  <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                    <span class="text-gray-900 text-sm font-medium">3 invoices</span>
                  </dd>
                </div>
                <div class="flex items-center justify-between py-3 sm:grid sm:grid-cols-2">
                  <dt class="pr-4 text-sm font-medium text-gray-600">Exclusive offers</dt>
                  <dd class="flex items-center justify-end sm:justify-center sm:px-4">
                    <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                    </svg>
                    <span class="sr-only">No</span>
                  </dd>
                </div>
                <div class="flex items-center justify-between py-3 sm:grid sm:grid-cols-2">
                  <dt class="pr-4 text-sm font-medium text-gray-600">6 months free advisor</dt>
                  <dd class="flex items-center justify-end sm:justify-center sm:px-4">
@include('ui::components.blocks.pricing.archivied.partials.three_tiers_on_brand_and_feature_comparison_tail.blade')
