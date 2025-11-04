<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news = [
            [
                'title' => 'Bem-vindo ao Myth of Yggdrasil!',
                'slug' => 'bem-vindo-ao-myth-of-yggdrasil',
                'content' => "Estamos felizes em anunciar o lançamento oficial do Myth of Yggdrasil!\n\nNossa jornada começa agora, e convidamos todos os jogadores para explorar o mundo de Midgard. Prepare-se para aventuras épicas, batalhas desafiadoras e uma comunidade incrível.\n\nCrie sua conta, baixe o cliente e comece sua jornada hoje mesmo!",
                'category' => 'news-and-events',
                'published_at' => Carbon::now()->subDays(7),
            ],
            [
                'title' => 'Guia para Iniciantes - Primeiros Passos',
                'slug' => 'guia-para-iniciantes-primeiros-passos',
                'content' => "Novo em Ragnarok Online? Este guia vai te ajudar a começar!\n\n1. Crie sua primeira classe\n2. Complete as missões de tutorial\n3. Explore a cidade de Prontera\n4. Junte-se a um grupo ou guild\n5. Participe dos eventos diários\n\nLembre-se: a comunidade está sempre pronta para ajudar novos jogadores!",
                'category' => 'guidebook',
                'published_at' => Carbon::now()->subDays(5),
            ],
            [
                'title' => 'Patch Notes - Atualização de Janeiro',
                'slug' => 'patch-notes-atualizacao-janeiro',
                'content' => "Confira as novidades desta atualização:\n\n**Novos Recursos:**\n- Sistema de Pet melhorado\n- Novos itens exclusivos\n- Melhorias na interface\n\n**Correções:**\n- Bugs no sistema de party corrigidos\n- Otimização de performance\n- Ajustes de balanceamento\n\n**Eventos:**\n- Evento de duplo EXP todo fim de semana\n- Boss especial aparecendo em horários aleatórios",
                'category' => 'patch-notes',
                'published_at' => Carbon::now()->subDays(2),
            ],
            [
                'title' => 'Evento Especial de Carnaval',
                'slug' => 'evento-especial-carnaval',
                'content' => "Prepare-se para o maior evento do ano!\n\nDe 10 a 18 de Fevereiro, participe do nosso evento de Carnaval com:\n- Drops duplicados\n- Boss exclusivo\n- Itens temáticos\n- Missões especiais\n- Prêmios incríveis\n\nNão perca!",
                'category' => 'news-and-events',
                'published_at' => Carbon::now()->subDay(),
            ],
            [
                'title' => 'Guia Completo de Classes',
                'slug' => 'guia-completo-classes',
                'content' => "Escolher a classe certa é fundamental!\n\n**Classes Físicas:**\n- Swordsman → Knight/Crusader\n- Archer → Hunter/Dancer-Bard\n- Thief → Assassin/Rogue\n\n**Classes Mágicas:**\n- Magician → Wizard/Sage\n- Acolyte → Priest/Monk\n\n**Híbridas:**\n- Merchant → Blacksmith/Alchemist\n\nCada classe tem suas vantagens. Escolha a que mais combina com seu estilo!",
                'category' => 'guidebook',
                'published_at' => Carbon::now()->subDays(3),
            ],
        ];

        foreach ($news as $item) {
            News::create($item);
        }
    }
}
