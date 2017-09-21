-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 21/09/2017 às 15:40
-- Versão do servidor: 5.7.19-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `erros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `erros`
--

CREATE TABLE `erros` (
  `id` int(11) NOT NULL,
  `erro` varchar(999) NOT NULL,
  `obs` varchar(999) NOT NULL,
  `solucao` varchar(999) NOT NULL,
  `apoio` varchar(999) NOT NULL,
  `nivel` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `erros`
--

INSERT INTO `erros` (`id`, `erro`, `obs`, `solucao`, `apoio`, `nivel`) VALUES
(22, 'C7990', 'Help desk.', 'Esvaziar o reservatório de toner', '', 'N2'),
(23, 'C6400', 'Caso erro continue abrir chamado', 'Desligar a maquina e aguardar 15 min.', '', 'N1'),
(24, 'C6000', 'Se o erro continuar abrir chamado', 'Desligue a maquina e aguarde 15 min.', '', 'N1'),
(25, 'Erro do disco de RAM', 'Desativar ou ativar o disco de ram', 'Verificar o driver no computador, verificar a copiadora.', '', 'N2'),
(26, 'Substituir unidade de processamento', 'Realizar o reset no modo de serviço do equipamento.', 'Reset U251', 'DokuWiki tem manual completo para o reset http://10.62.1.15/dokuwiki_sisa/atendimento', 'N1'),
(27, 'Substituir MK', 'Reset U251', 'Realizar o reset no modo de serviço do equipamento.', 'DokuWiki tem manual completo para o reset http://10.62.1.15/dokuwiki_sisa/atendimento', 'N1'),
(28, 'C3100', 'Trava laranja na lateral direita do equipamento', 'Liberar a trava de transporte do scanner', 'DokuWiki tem manual completo para o reset http://10.62.1.15/dokuwiki_sisa/atendimento', 'N1'),
(29, 'C2000', 'Erro no motor principal', 'Abrir chamado', '', 'N3'),
(30, 'C3200', 'Erro na lampado do scanner', 'Abrir chamado', ' ', 'N3'),
(31, 'C3300', 'Erro no CCD', 'Abrir chamado', '', 'N3'),
(32, 'C4000', 'Erro no motor Poligonal ', 'Abrir chamado', '', 'N3'),
(33, 'C4200', 'Erro na unidade de scanner', 'Abrir chamado', '', 'N3'),
(34, 'C6020', 'Temperatura da fusão mais alto que o normal', 'Abrir chamado', '', 'N3'),
(35, 'C6030', 'Sensor de temperatura queberado', 'Abrir chamado', '', 'N3'),
(36, 'F000', 'Se problema continuar abrir chamado', 'Remover o cabo de rede e ligar o equipamento sem o cabo e verificar se o erro continua. Caso o equipamento ligue sem erro o problema é na rede', '', 'N2'),
(37, 'CF248', 'Pode ser preciso atualizar o firmware e o driver de impressão', 'Retirar o cabo de rede do equipamento e reiniciar a maquina. Limpar a fila de impressão,', '', 'N2'),
(38, 'Unidade do revelador não está instalada', 'O toner pode estar mal encaixado. Remova o toner, agite cuidadosamente e coloque novamente no equipamento.', 'Trocar o toner', '', 'N1'),
(39, 'Toner não genuíno instalado', 'Isso é um erro na hora de reconhecer o toner', 'Aperte as teclas OK + PARAR até a mensagem desaparecer', '', 'N1'),
(40, 'Instalar MK', 'Mensagem aparece normalmente em impressoras', 'Realizar o reset do contador de MK', '', 'N1'),
(41, 'Verificar caixa de toner', 'Caixa de toner é uma caixa branca que vem juntos dos toner coloridos. Algumas copiadora P&B por erro de tradução apresentam essa mensagem', 'Trocar ou limpar a caixa de resíduos.', ' ', 'N1'),
(42, 'Erro de envio', 'Problema na configuração do scanner. Talvez será preciso acesso remoto', 'Help desk', '', 'N2'),
(43, 'C9181', 'A quantidade de copias é maior que 999', 'Dividir o trabalho de copia ou impressão em dois lotes', '', 'N1'),
(44, 'Manchas coloridas nas digitalizações', 'Limpar todo o vidro e remover pedaços de papel, poeira e fios de cabelo da vidro', 'Limpar o vidro de exposição', '', 'N1'),
(45, 'Mancha branca no meio da folha', 'Normalmente ocorre apos a troca do toner', 'Realizar a tonalização do equipamento,', 'DokuWiki tem manual completo http://10.62.1.15/dokuwiki_sisa/atendimento', 'N1'),
(46, 'Substituir unidade de Imagem', 'Kit fc venceu a vida útil. Enviar novo kit para troca. Caso o cliente consiga realizar troca enviar direto para o cliente.', 'Trocar o kit fc', '', 'N1'),
(47, 'Impossível conectar a NW', 'Caso o erro continue será preciso abrir chamado para verificar a  placa de rede e o cabo.', 'Reconectar o cabo de rede a copiadora. ', '', 'N1'),
(48, 'PCL error', 'Driver da copiadora está errado.', 'Help desk', '', 'N2'),
(49, 'Fechar processador de documentos.', 'Peça para o cliente abrir e fechar novamente. Caso a mensagem não suma abrir chamado pois o sensor pode estar com defeito.', 'Feche a tampa do ADF', '', 'N1'),
(50, 'Unidade de criação de imagem baixa', 'Essa mensagem aparece quando o kit fc está proximo de acabar. ', 'Trocar o kit fc quando o equipamento pedir.', '', 'N1'),
(51, 'Impressora Offline', 'Problemas na porta do driver. Problema no cabo ou na rede.', 'Help desk', '', 'N2'),
(52, 'C4600', 'Erro no laser', 'Abrir chamado', '', 'N3'),
(53, '6B', 'Realizar o reset da unidade. Se a qualidade das copias estiver ruim abrir chamado', 'Help desk', '', 'N2'),
(54, 'XPS error', 'Verificar o driver que está instalado no computadar', 'Help Desk', '', 'N2');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `erros`
--
ALTER TABLE `erros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `erros`
--
ALTER TABLE `erros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
