//Elementos DOM
const body = document.querySelector(".js-body");
const showPwd = document.querySelector(".js-show-password");
const inputPwd = document.querySelector(".js-input-password");
const roles = document.querySelectorAll(".js-checkbox");
const btnLogin = document.querySelector(".js-button-login");
//const form = document.querySelector(".js-form-login");
const header = document.querySelector(".js-header");
const lockItens = document.querySelectorAll(".js-item-lock");
const toggleTheme = document.querySelector(".js-toggle-theme");

//Informações do formulário
let selectedRole = null;
let loginInfo = [];

function scroll(item) {
    const hasVerticalScroll = document.documentElement.scrollHeight > window.innerHeight;
    const headerno = document.querySelector(".js-header-no");
    //console.log("Possui scroll =>" + hasVerticalScroll);
    if (!hasVerticalScroll || headerno) {
        item.style.backgroundColor = "var(--backgroundColor)";
        return;
    } 
    window.addEventListener("scroll", function () {
        if (window.pageYOffset !== 0) {
            item.style.backgroundColor = "var(--backgroundColor)";
        } else {
            item.style.backgroundColor = "transparent";
        }
    });
}

function submit(btn) {
    if (!form) {
        return;
    }
    btn.addEventListener("click", (e) => {
        e.preventDefault();
        const user = document.querySelector(".js-input-user").value;
        const password = document.querySelector(".js-input-password").value;
        if (user == "" || password == "") {
            //console.log("Por favor, preencha todos os campos");
        }
        let userInfo = {
            name: user,
            password: password,
            role: selectedRole
        }
        loginInfo.push(userInfo);
    })
}

function roleSelector(roles) {

    let data = null;
    let cont = 0;

    if (!roles[0] instanceof HTMLElement) {
        //console.log("Não é um elemento DOM");
        return;
    }
    roles.forEach(role => {
        if (role.dataset.selected == "true") {

            cont++;
            if (cont > 1) {
                role.dataset.selected = "false";
                //console.log("Mais de uma atribuição selecionada");
                cont = 0;

            } else {
                data = role;
                selectedRole = role.dataset.role;
                //console.log(selected);
            }


        }
        role.addEventListener("click", () => {
            if (role == data) {
                return;
            }
            selectedRole = role.dataset.role;
            //console.log(selected);
            data.dataset.selected = "false";
            role.dataset.selected = "true";
            data = role;
        })
    })
}

function showPassword(input, show) {
    if (!input[0] instanceof HTMLElement && !show[0] instanceof HTMLElement) {
        //console.log("Não é um elemento DOM");
        return;
    }
    show.addEventListener("click", (e) => {

        if (input.type == "password") {
            input.setAttribute("type", "text");
            return;
        }
        if (input.type == "text") {
            input.setAttribute("type", "password");
        }

    })
}

function lockedItens(itens) {
    let filter = document.createElement("div");
    let message = document.querySelector(".message-login");
    let cancel = document.querySelector(".js-icon-cancel");
    itens.forEach(item => {
        item.addEventListener("click", e => {
            e.preventDefault();
            filter.style.position = "absolute";
            filter.style.inset = "0";
            filter.style.backgroundColor = "black";
            filter.style.zIndex = "333";
            filter.style.opacity = ".5";

            if (body && message) {
                body.appendChild(filter);
                message.style.display = "flex";
                document.documentElement.style.overflow = "hidden";
                if (cancel) {
                    cancel.addEventListener("click", () => {
                        filter.remove();
                        message.style.display = "none";
                        document.documentElement.style.overflow = "visible";
                    })
                }

            }
        })
    })
}

function themed(btn) {
    let body = document.body;
    btn.addEventListener("click", () => {
        if (body.classList.contains("default-theme")) {
            body.classList.remove("default-theme");
            body.classList.add("dark-theme");
            btn.style.transform = "rotateY(180deg)";
            return;
        }
        if (body.classList.contains("dark-theme")) {
            body.classList.remove("dark-theme");
            body.classList.add("default-theme");
            btn.style.transform = "rotateY(0deg)";

        }
    })
}

if (showPwd && inputPwd) {
    showPassword(inputPwd, showPwd);
}
if (roles) {
    roleSelector(roles);
}
// if (btnLogin) {
//     submit(btnLogin);
// }
if (header) {
    scroll(header);
}
if (lockItens) {
    lockedItens(lockItens);
}
if (toggleTheme) {
    themed(toggleTheme);
}