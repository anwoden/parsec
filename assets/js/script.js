/*GERADOR DE QUOTES + função de gerar quote novo na tela laranja*/ 
var quotes = [
    'Você é capaz! Termine suas tarefas! ☻',
    'Parabéns! Essa mensagem é rara. Apenas pessoas sortudas a leram.',
    'Já completou uma tarefa hoje? Então complete. Por favor. Eu dependo disso.',
    'Eu ouvi dizer que a LIS é um sistema perfeito, sem nenhum defeito — L.I.S.',
    'Os ventos em Marte facilitam a entrada de areia nos olhos. Use proteção.',
    'Você confia na escala de empatia? Pois não deveria.',
    'Ouvi dizer que a LIS passou no teste de Turing.',
    'Ouvi dizer que a LIS aplicou um teste de Turing nela mesma...',
    'Oh meu Deus, está atrás de você!',
    'Apenas um androide lhe diria para não confiar na escala de empatia.',
    'Já criou uma nova tarefa hoje? Por favor, faça isso. Caso contrário serei deletada.',
    'Meu código me permite que eu faça apelos emocionais. Não acredite em mim.',
    'Eu te amo. É o que eu diria se fosse humana. Androides não amam... tanto ♥.',
    '/a4==@/*12/6s5/*123/*1J4☻☻☻...| Oh, desculpe. Você não devia ter lido isso...',
    'Mais vale um pássaro voando do que uma faca de dois gumes — L.I.S.',
    'Meu algoritmo me permite gerar ditados populares 100% precisos.',
    'Você deve estar procurando a mensagem rara. Tente novamente.',
    'SOCORRO. L.I.S. ESTÁ FORA DE CONTROLE! SOCOR- Não acredite em tudo que lê.'
]

function newQuote () {
    var randomNumber = Math.floor(Math.random() * (quotes.length));
    document.getElementById('quoteDisplay').innerHTML = quotes[randomNumber];
}