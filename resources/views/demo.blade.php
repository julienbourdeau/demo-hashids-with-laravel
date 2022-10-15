<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }}</title>

  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="h-screen px-4 antialiased bg-slate-100 text-slate-600">

</table>

<div class="relative rounded-xl overflow-auto">
  <div class="mx-auto shadow-sm overflow-hidden my-8 max-w-3xl">
    <table class="border-collapse table-auto w-full text-sm">
      <thead>
      <tr>
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
          ID
        </th>
        <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
          Thing
        </th>
        <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
          User
        </th>
      </tr>
      </thead>
      <tbody class="bg-white dark:bg-slate-800">
        @foreach($things as $t)

          <tr>
            <td>
              <a
                class="block border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"
                href="todo"
                title="Go to Thing page loaded via regular ID">
                {{ $t->id }}
              </a>
            </td>
            <td>
              <a
                class="block border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400"
                href="todo"
                title="Go to Thing page loaded via hashid">
                {{ $t->name }} <br>
                todo
              </a>
            </td>
            <td>
              <a
                class="block border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400"
                href="todo"
                title="Go to user page loaded via hashid">
                {{ $t->user->name }} <br>todo
              </a>
            </td>
          </tr>

        @endforeach
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
