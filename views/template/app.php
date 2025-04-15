<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bookwise</title>
</head>

<body class="bg-slate-900 text-white">
    <header class="border-b border-slate-700">
        <nav class="mx-auto max-w-screen-xl flex justify-between py-6 px-8 items-center">
            <div class="font-bold text-xl">Bookwise<span class="font-bold text-sky-600">. 📚</span></div>
            <ul class="flex space-x-4">
                <li>
                    <a class="font-semibold hover:bg-slate-700 py-2 px-4 rounded-md" href="/">Explorar</a>
                </li>
                <li>
                    <a class="font-semibold hover:bg-slate-700 py-2 px-4 rounded-md" href="/my-books.php">Meus
                        Livros</a>
                </li>
            </ul>
            <ul class="flex gap-4">
                <li>
                    <a title="Botão de cadastrar" class="font-semibold py-2 px-4 rounded-md border border-slate-700"
                        href="/login.php">Cadastre-se</a>
                </li>
                <li>
                    <a title="Botão de fazer login"
                        class="font-semibold py-2 px-4 rounded-md bg-sky-600 border border-sky-400"
                        href="/login.php">Fazer Login</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-xl py-6 px-8">
        <?php require("views/{$view}.view.php");?>
    </main>
</body>

</html>