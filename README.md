# exemplos de POO no PHP

Neste repositorio utilizaremos o PHP com **Programção Orientada a Objetos**

os assuntos e exemplos estão divididos po `branches`,
acessiveis pelo menu de branches no GitHub.

## Branch 10: Compuser e Autoload

---
 ## Branch 09:Namespace
- Reorganização dos arquivos em pastas dentro de src
- Declaração do namespace e do subnamespace em cada arquivo
- Utilização do nome completo de um recurso: App\Pedidos\Pedido
- Importação do namespace com use para utilizar nomes simples
- Criação de apelidos com as para solucionar conflitos de nomes
- Lembrete: use Importa namespace; require_once carrega arquivos
---
## Branch 08: Enumerações
 - Enumerações com um conjunto definido de opções usando case
- Casos associados a valores do tipo string
- Acesso a um caso com StatusPedido::NomeCaso
- Acesso ao valor/texto do caso com ->value

---
## Brach 07: Recursoso estáticos
- Propriedades estaticas usando static
- Métodos estaticos usando static
- Acesso a recursos estaticos com ::
- Acesso estaticos da propria classe usando self
- Diferença entre usar recursos estaticos de classe e  recursos de objeto
---
## Branch 06:
- Interface notificador como um contrato de comportamentos (metodos)
- Definição do metodo enviar(string $mensagem): string na interface
- Aplicação de interface com implementes nas classes NotificadorEmail e NotificadorSMS
- Implementação do metodo enviar em cada classe
- Polimorfismo: a mesma chamada a enviar utiliza a implementação de cada classe.
---
## Branch 05:
- Classe abstrata: conteudo
- Impossibilidade de instanciardiretamente uma classe abstrata
- Metodo abstrato: getDescricao()
- Obriga a implementação do metodo abstrato pelas classes filhas Filme e Serie.
- Polimorfismo: a mesma chamada e getDescricaoutiliza a implantacao de cada classe
---
 ## Branch 04: Herança
 - Classe-pai (superclasse): Conteudo
 - Classe-filha (subclasse): Filme e Serie
 - Herança utilizando extends
 - Herança com propriedades e métodos
 - Visibilidade protected na superclasse permitindo o acesso atraés das subclasses.
 - Construtor da superclasse parent::__construct()
 - Propriedades específicas das subclasses
---
## Branch 03: Método construtor
- finalidade do construtor
- Implementação do metodo __construct
- Parâmetros/argumentos do construtor
- Passagem de dados/valores ao criar objetos
- Atribuição de valores para as propriedades usando o construtor
- Uso de setter a partir do contructor
---

## Branch 02:Visibilidade e Encapsulamento
- Visibilidade de propriedade public e private
- Encapsulamento
- Métodos Getter para a leitura
- Métodos Setters para a escrita
---

## Branch 01: Classes, Objetos, Propriedades e Métodos

- Classes e Objetos
- Propriedades e métodos
- Tipos de dados
- Uso do $this para acessar recursos de dentro da própria classe

