@extends('layouts.master')

@section('content')
    <div class="w-full flex items-center justify-center sm:px-6 lg:px-8">
        <div class="w-full max-w-lg">
            <div class="pb-6">
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                     alt="Workflow">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Sign in to your account
                </h2>
            </div>
            <form class="bg-white shadow-md rounded px-14 py-14" action="{{ route('login') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm -space-y-px">
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            E-mail or Username
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text" placeholder="Username" name="email">
                    </div>

                    <div class="mb-10">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" type="password" placeholder="****" name="password">
                        {{--<p class="text-red-500 text-xs italic">Please choose a password.</p>--}}
                    </div>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                               class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4
                                border border-transparent text-sm font-medium rounded-md
                                text-white bg-indigo-600 hover:bg-indigo-700
                                focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
