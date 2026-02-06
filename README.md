# Theme-DrSuzane
Site dedicado para uma doutora da área da estética

1. # 🌿 Tema WordPress - Dra. Suzana

## 📂 Estrutura do Projeto

Abaixo, a organização dos arquivos necessários para o funcionamento do tema:

tema-suzana/
├── images/          # Todas as imagens e ícones do site
├── index.php        # Estrutura principal do site (convertida de HTML)
├── style.css        # Folha de estilo com cabeçalho de identificação do tema
└── README.md        # Guia de instalação (este arquivo)

## 🚀 Como Instalar o Tema

Existem duas formas de instalar este tema no seu ambiente WordPress:

### 1. Via Painel Administrativo (Recomendado para Produção)
1. Certifique-se de que a pasta do tema está compactada no formato **.zip** (ex: `tema-suzana.zip`).
2. Acesse o painel do WordPress (`/wp-admin`).
3. Vá em **Aparência > Temas > Adicionar Novo**.
4. Clique em **Enviar Tema** e selecione o arquivo `.zip`.
5. Após o upload, clique em **Ativar**.

### 2. Via Diretório de Arquivos (Recomendado para Localhost/Docker)
1. Copie a pasta descompactada `tema-suzana`.
2. Cole a pasta no diretório: `wp-content/themes/`.
3. Vá ao painel do WordPress em **Aparência > Temas**.
4. Localize o card "Estética Dra Suzana" e clique em **Ativar**.

## 🛠️ Requisitos de Ambiente (Docker)

Se estiver usando o ambiente Docker fornecido neste projeto, certifique-se de que o seu `docker-compose.yml` possui o mapeamento de volume correto:

```yaml
volumes:
  - ./wp-content:/var/www/html/wp-content
