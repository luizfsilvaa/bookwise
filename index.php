<?php 
require("data.php");
?>

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
        <h1 class="mt-6 font-bold text-xl">Explorar</h1>
        <form action="" class="mt-6">
            <input
                class="bg-transparent rounded-md border border-slate-700 py-2 px-2 focus:outline-none focus:border-sky-600"
                type="text" name="search" id="search" placeholder="Faça sua pesquisa aqui...">
            <button class="font-semibold py-2 px-4 rounded-md bg-sky-600 border border-sky-400"
                title="Botão de pesquisar">
                Fazer Pesquisar
            </button>
        </form>


        <section class="mt-6 mb-6 grid gap-4 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($books as $book): ?>
                <a href="/book.php?id=<?= $book["id"]; ?>" class="p-4 rounded-md border border-slate-700 hover:border-sky-600">
                    <div class="flex gap-4">
                        <div class="w-1/3">Imagem</div>
                        <div class="space-y-2">
                            <div class="font-semibold"><?= $book["title"]; ?></div>
                            <div class="font-semibold italic"><?= $book["author"]; ?></div>
                            <div class="text-sm italic">⭐⭐(2 Avaliações)</div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <?= $book["description"]; ?>
                    </div>
                </a>
            <?php endforeach; ?>
        </section>
    </main>
</body>

</html>