@extends('layouts.app')

@section('header')
    <base-header title="UI Kit"></base-header>
@endsection

@section('content')

    <base-panel>
        <h2 class="text-2xl font-medium">ال buttons</h2>
        <div class="mt-4">
            <button class="px-2 py-1 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium rounded">Primary
                sm
            </button>
            <button class="px-2 py-1 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded">Success
                sm
            </button>
            <button class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded">Danger sm
            </button>

            <button class="px-3 py-1 bg-indigo-500 hover:bg-indigo-600 text-white font-medium rounded">Primary</button>
            <button class="px-3 py-1 bg-green-500 hover:bg-green-600 text-white font-medium rounded">Success</button>
            <button class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white font-medium rounded">Danger</button>

            <button class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white font-medium rounded">Primary lg
            </button>
            <button class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-medium rounded">Success lg</button>
            <button class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-medium rounded">Danger lg</button>
        </div>
    </base-panel>

    <base-panel class="mt-4">
        <h2 class="text-2xl font-medium">Steve forms</h2>
        <div class="mt-4">
            <div>
                <div class="flex flex-col sm:flex-row py-8">
                    <div class="sm:w-1/4">
                        <h2 class="text-xl">معلومات الحساب</h2>
                    </div>
                    <div class="sm:w-3/4 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <base-input label="الاسم" placeholder="الاسم"></base-input>
                        <base-input type="email" label="البريد الالكتروني" placeholder="الاسم"></base-input>
                    </div>
                </div>
                <div class="flex py-8 flex-col sm:flex-row border-t border-gray-200">
                    <div class="sm:w-1/4">
                        <h2 class="text-xl">معلومات الحساب</h2>
                    </div>
                    <div class="sm:w-3/4 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <base-input label="الاسم" placeholder="الاسم"></base-input>
                        <base-input type="email" label="البريد الالكتروني" placeholder="الاسم"></base-input>
                    </div>
                </div>
            </div>
        </div>
    </base-panel>

    <base-panel class="mt-4">
        <h2 class="text-2xl font-medium">Casual forms</h2>
        <div class="mt-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <base-input label="الاسم" placeholder="الاسم"></base-input>
                <base-input type="email" label="البريد الالكتروني" placeholder="الاسم"></base-input>
                <base-input label="الاسم" placeholder="الاسم"></base-input>
                <base-input type="email" label="البريد الالكتروني" placeholder="الاسم"></base-input>
            </div>
        </div>
    </base-panel>

    <base-panel class="mt-4">
        <h2 class="text-2xl font-medium">Tables</h2>
        <div class="mt-4">
            <div class="flex flex-col">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6">
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    الاسم
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    الوظيفة
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    الحالة
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    الدور
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                 alt=""/>
                                        </div>
                                        <div class="mx-2">
                                            <div class="text-sm leading-5 font-medium text-gray-900">فلان الفلاني</div>
                                            <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    مخرج
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                  <span
                                      class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    مفعل
                                  </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                    مالك
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">تعديل</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                 alt=""/>
                                        </div>
                                        <div class="mx-2">
                                            <div class="text-sm leading-5 font-medium text-gray-900">فلان الفلاني</div>
                                            <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    مخرج
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                  <span
                                      class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    مفعل
                                  </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                    مالك
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">تعديل</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </base-panel>

@endsection
