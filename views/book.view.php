<h1 class="mt-6 font-bold text-xl">Detalhes do Livro - <?= $book["title"]; ?></h1>
       
        <section class="mt-6 grid">
            <a href="/livro.php?id=<?= $book["id"]; ?>" class="p-4 rounded-md border border-slate-700 hover:border-sky-600">
                <div class="flex gap-4">
                    <div class="w-1/3">Imagem</div>
                    <div>
                        <div class="font-semibold"><?= $book["title"]; ?></div>
                        <div class="font-semibold italic"><?= $book["author"]; ?></div>
                        <div class="text-sm italic">⭐⭐(2 Avaliações)</div>
                    </div>
                </div>
                <div class="mt-6">
                    <?= $book["description"]; ?>
                </div>
            </a>
        </section>