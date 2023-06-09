<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">

    <div class="modal-content rounded-4 shadow">
      <div class="modalHeader" class="modal-header pt-4  pb-3 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2 text-black-50">Cadastre-se</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img
            src="Midias/btnclose.svg"></button>
      </div>

      <div class="modal-body p-5 pt-0 d-flex justify-content-center">
        <form id="form" action="perfil.php" method="POST">
          <div id="divFormsTotal">
            <div id="divFormUnida">
              <!-- NOTE - INPUT NOME FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">Nome</label>
                <input type="text" class="inputForm" id="nome" name="nome" placeholder="Nome" required>
                <div id="errorNome" class="error-message"></div>
              </div>
              <!-- NOTE - INPUT NASCIMENTO FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">Data de Nascimento</label>
                <input type="date" class="inputForm" id="dataNasc" name="dataNasc" required>
                <div id="errorDataNasc" class="error-message"></div>
              </div>
              <!-- NOTE - INPUT EMAIL FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">E-mail</label>
                <input type="email" class="inputForm" id="email" name="email" placeholder="nome@example.com" required>
                <div id="errorEmail" class="error-message"></div>
              </div>
              <!-- NOTE - INPUT SENHA FORMULÁRIO -->
              <div class="boxForm">
                <div class="pass-field">
                  <label class="labelForm required">Senha</label>
                  <input type="password" class="inputForm" id="passwordInput" name="password" placeholder="Senha"
                    required>
                  <div id="errorSenha" class="error-message"></div>
                  <i class="fa-solid fa-eye"></i>
                </div>
              </div>
              <!-- NOTE - INPUT TELEFONE FORMULÁRIO -->
              <div class="boxForm">
                <label class="labelForm required">Telefone</label>
                <input type="tel" class="inputForm" id="phoneInput" name="phoneInput" placeholder="XX XXXXXXXXX"
                  pattern="\(\d{2}\) \d{4,5}-\d{4}" required>
                <div id="errorTelefone" class="error-message"></div>
              </div>
              <!-- NOTE - INPUT SEXO FORMULÁRIO -->
              <div class="boxForm">
                <label class="required">Sexo</label>
                <div class="inputChecks">
                  <div class="sex1">
                    <div>
                      <input type="radio" name="opSexo" value="Masculino">
                      <label>Masculino</label>
                    </div>
                    <div>
                      <input type="radio" name="opSexo" value="Feminino">
                      <label class="form-check-label">Feminino</label>
                    </div>
                  </div>
                  <div class="sex">
                    <div>
                      <input type="radio" name="opSexo" value="Outro">
                      <label class="form-check-label">Outro</label>
                    </div>
                    <div>
                      <input type="radio" name="opSexo" value="Prefiro não dizer">
                      <label class="form-check-label">Prefiro não dizer</label>
                    </div>
                  </div>
                </div>
                <div id="errorSexo" class="error-message"></div>
              </div>
              <!-- NOTE - INPUT CHECKBOX TERMOS FORMULÁRIO -->
              <div id="termosForms">
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label>
                      Não quero receber mensagens de marketing do Silksong.
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck1">
                    <label for="invalidCheck">
                      Compartilhar meus dados cadastrais com os provedores de conteúdo do Silksong para fins de
                      marketing.
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck">
                      Eu concordo com os Termos e Condicões de Uso do Silksong.
                    </label>
                    <div class="invalid-feedback">
                      Você precisa aceitar os termos para prosseguir.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 justify-content-center">
              <button type="button" id="signButton">Continuar</button>
            </div>
            <!-- SECTION - DADOS DO USUÁRIO -->
            <div id=dadosVerifica>
            </div>
            <!-- SECTION - DADOS DO USUÁRIO -->
            <button type="submit" id="confirmarEnvio" hidden>Confirmar envio</button>
        </form>
      </div>
    </div>
  </div>
</div>

</div>