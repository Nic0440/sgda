<?php
$this->layout("_theme", ['title' => 'Perguntas frequentes editor']);
?>

<section class="faq-menager__header">

    <h1>FAQ's editor</h1>

</section>
<section class="faq-menager__content">

    <div class="faq-menager__container">
        <div class="faq-menager__actions">
            <button type="button" class="button button--model-ii js-btn-delete  js-edit" disabled>
                <i class="fa-solid fa-trash fa-md"></i>
                Delete
            </button>
            <button type="button" class="button button--model-iii js-btn-add js-edit">
                <i class="fa-solid fa-plus fa-md"></i>
                Add question
            </button>
        </div>
        <div class="questions-container">
            <div class="faq-menager__row--actions">
                <div class="faq-menager__cell">
                    <label class="checkbox__container" for="chkHeader">
                        <input type="checkbox" id="chkHeader" class="checkbox-square  js-chk-header">
                        <span class="checkbox-custom checkbox--header"><i class="fa-solid fa-check fa-md"></i></span>
                    </label>
                </div>
                <div class="faq-menager__cell">Question</div>
                <div class="faq-menager__cell">Publication Date</div>
                <div class="faq-menager__cell">Last Update</div>
                <div class="faq-menager__cell">Status for customer</div>
                <div class="faq-menager__cell">Action</div>
            </div>
            <div class="faq-menager__row">
                <div class="faq-menager__cell">
                    <label class="checkbox__container" for="chk-1">
                        <input type="checkbox" id="chk-1" class="checkbox-square js-checkbox">
                        <span class="checkbox-custom"><i class="fa-solid fa-check fa-xs"></i></span>
                    </label>
                </div>
                <div class="faq-menager__cell faq-menager__cell--question js-title">Ipsum lorem? Lorem</div>
                <div class="faq-menager__cell">2023-01-15</div>
                <div class="faq-menager__cell">2023-06-30</div>
                <div class="faq-menager__cell js-status">Visible</div>
                <div class="faq-menager__cell">
                    <button class="js-edit button--no-style item-container"> <i class="fa-solid fa-pen-to-square fa-lg"></i>
                        <div class="tooltip">Edit question</div>
                    </button>
                </div>
                <div class="question js-question" aria-expanded="false" hidden>
                    <div class="question__header">
                        <p>Edit question</p>
                        <button class="js-close button--no-style item-container">
                            <i class="fa-solid fa-x fa-lg"></i>
                            <div class="tooltip--left">Close</div>
                        </button>
                    </div>
                    <div class="question__item question__editor">
                        <form class="form__edit-text js-form-edit-text">
                            <span class="message--error" hidden><i class="fa-solid fa-circle-exclamation"></i>Preencha esse campo!</span>
                            <div class="input__container input__container--title">
                                <label class="label--question" for="question">Title:</label>
                                <input type="text" class="input--no-style js-question-title" value="Ipsum lorem? Lorem">
                            </div>
                            <span class="message--error" hidden><i class="fa-solid fa-circle-exclamation"></i>Preencha esse campo!</span>
                            <div class="input__container input__container--textarea">
                                <div class="text-settings">
                                    <button type="button" class="button--no-style js-add-bold">
                                        <i class="fa-solid fa-bold fa-lg"></i>
                                    </button>
                                    <button type="button" class="button--no-style js-add-link">
                                        <i class="fa-solid fa-link"></i>
                                    </button>
                                </div>
                                <textarea class="input--no-style js-answer" id="answer" name="answer" placeholder="Answer">&lt;strong&gt;Ipsum lorem? Lorem&lt;/strong&gt;</textarea>
                            </div>
                            <div class="settings__container">
                                <div class="input__container input__container--checkbox">
                                    <label class="checkbox__container" for="chkVisibility-1">
                                        <input type="checkbox" id="chkVisibility-1" class="checkbox-square  visible js-checkbox-visibility">
                                        <span class="checkbox-custom"><i class="fa-solid fa-check fa-xs"></i></span>
                                        <p>Visible for the custumer</p>
                                    </label>
                                </div>
                                <div class="button__container">
                                    <button type="button" class="button button--model-i js-save-button" disabled>SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="actions__container">
        <div class="question-del js-del-question" aria-expanded="false" hidden>
            <div class="question-del__item question-del__header">
                <i class="fa-solid fa-trash"></i>
            </div>
            <form>
                <div>
                    <h2>Delete Question</h2>
                    <h3>Are you sure you want to delete <br> <span class="plural">this question</span>?</h3>
                </div>
                <div class="action-buttons">
                    <button type="button" class="button button--model-iv js-close js-cancel">Cancel</button>
                    <button type="button" class="button button--model-v">Yes, delete</button>
                </div>
            </form>
        </div>

        <div class="question question--add js-add-question" aria-expanded="false" hidden>
            <div class="question__header">
                <p>Add question</p>
                <button class="js-close button--no-style item-container">
                    <i class="fa-solid fa-x fa-lg"></i>
                    <div class="tooltip--left">Close</div>
                </button>
            </div>
            <div class="question__item question__editor">
                <form class="form__add-question">
                    <span class="message--error" hidden><i class="fa-solid fa-circle-exclamation"></i>Preencha esse campo!</span>
                    <div class="input__container input__container--title">
                        <label class="label--question" for="add-question">Title:</label>
                        <input type="text" id="add-question" class="input--no-style js-question-title">
                    </div>
                    <span class="message--error" hidden><i class="fa-solid fa-circle-exclamation"></i>Preencha esse campo!</span>
                    <div class="input__container input__container--textarea">
                        <div class="text-settings">
                            <button type="button" class="button--no-style js-add-bold">
                                <i class="fa-solid fa-bold fa-lg"></i>
                            </button>
                            <button type="button" class="button--no-style js-add-link">
                                <i class="fa-solid fa-link"></i>
                            </button>
                        </div>
                        <textarea class="input--no-style js-answer" id="answer" name="answer" placeholder="Answer"></textarea>
                    </div>
                    <div class="settings__container">
                        <div class="input__container input__container--checkbox">
                            <label class="checkbox__container" for="chkVisibility-add">
                                <input type="checkbox" id="chkVisibility-add" class="checkbox-square  visible js-checkbox-visibility">
                                <span class="checkbox-custom"><i class="fa-solid fa-check fa-xs"></i></span>
                                <p>Visible for the custumer</p>
                            </label>
                        </div>
                        <div class="button__container">
                            <button type="button" class="button button--model-i js-save-button" disabled>ADD QUESTION</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

<script>
    let questionText, answerText;
    const selectAllChks = document.querySelector(".js-chk-header");
    const checkboxes = document.querySelectorAll(".js-checkbox");
    const editBtns = document.querySelectorAll(".js-edit");
    const closeBtns = document.querySelectorAll(".js-close");
    const addBold = document.querySelectorAll(".js-add-bold");
    const addLink = document.querySelectorAll(".js-add-link");
    const deleteBtn = document.querySelector(".js-btn-delete");
    const addQuestionContainer = document.querySelector(".js-add-question");
    const deleteForm = document.querySelector(".js-del-question");
    const body = document.body;

    addBold.forEach(button => {
        button.addEventListener('click', (e) => {
            e.stopPropagation();
            const form = e.target.closest("form");
            const answerInput = form.querySelector('.js-answer');
            const button = form.querySelector(".js-save-button");
            let start = answerInput.selectionStart;
            let end = answerInput.selectionEnd;
            let selectedText = answerInput.value.substring(start, end);

            if (selectedText) {
                button.disabled = false;
                let isBold = /<strong>[\s\S]+<\/strong>/.test(selectedText);

                if (isBold) {
                    let newText = answerInput.value.substring(0, start) + selectedText.replace(/<strong>([\s\S]+)<\/strong>/g, '$1') + answerInput.value.substring(end);
                    answerInput.value = newText;
                    return;
                }

                let newBoldText = '<strong>' + selectedText + '</strong>';
                let newText = answerInput.value.substring(0, start) + newBoldText + answerInput.value.substring(end);
                answerInput.value = newText;

            }
        });
    });

    addLink.forEach(button => {
        button.addEventListener('click', (e) => {
            const form = e.target.closest("form");
            const answerInput = form.querySelector('.js-answer');
            const button = form.querySelector(".js-save-button");
            let start = answerInput.selectionStart;
            let end = answerInput.selectionEnd;
            let selectedText = answerInput.value.substring(start, end);

            if (selectedText) {
                let isLink = /<a[^>]+>[\s\S]+<\/a>/.test(selectedText);

                if (isLink) {
                    button.disabled = false;
                    let newText = answerInput.value.substring(0, start) + selectedText.replace(/<a[^>]+>([\s\S]+)<\/a>/g, '$1') + answerInput.value.substring(end);
                    answerInput.value = newText;
                    return;
                }
                let url = prompt("Please enter the URL:");
                if (url) {
                    button.disabled = false;
                    let newLinkText = '<a href="' + url + '" class="link--contact link--dark-color">' + selectedText + '</a>';
                    let newText = answerInput.value.substring(0, start) + newLinkText + answerInput.value.substring(end);
                    answerInput.value = newText;
                }

            }
        });
    });

    editBtns.forEach(button => {
        button.addEventListener("click", (e) => {
            e.stopPropagation();
            let row, form, popup, visibility;
            if (row = e.target.closest(".faq-menager__row")) {
                form = row.querySelector("form");
                popup = row.querySelector(".js-question");
                // visibility = row.querySelector(".js-status");
            }

            if (!row) {
                popup = addQuestionContainer;
                form = addQuestionContainer;
            }

            console.log(e.target)

            if (e.target.classList.contains("js-btn-delete")) {
                popup = deleteForm;
                form = deleteForm;

                openForm(popup);
                return;
            }

            const answerInput = form.querySelector(".js-answer");
            const checkbox = form.querySelector(".js-checkbox-visibility");
            const questionInput = form.querySelector(".js-question-title");
            const btn = form.querySelector(".js-save-button");

            questionText = questionInput.value;
            answerText = answerInput.value;

            if (checkbox.classList.contains("visible")) {
                checkbox.checked = true;
            }

            checkbox.addEventListener("click", () => {
                btn.disabled = false;
            })
            answerInput.addEventListener("input", () => {
                btn.disabled = false;
            })
            questionInput.addEventListener("input", () => {
                btn.disabled = false;
            })

            openForm(popup);
        }, true)
    });

    function openForm(form) {
        if (body.getAttribute("aria-hidden") === "true" && form.getAttribute("aria-expanded") === "false") {
            body.setAttribute("aria-hidden", "false");
            form.setAttribute("aria-expanded", "true");
            return;
        }
        body.setAttribute("aria-hidden", "true");
        form.setAttribute("aria-expanded", "false");
    }

    closeBtns.forEach(icon => {
        icon.addEventListener("click", (e) => {
            e.stopPropagation();
            let row, form, popup;

            if (row = e.target.closest(".faq-menager__row")) {
                form = row.querySelector("form");
                popup = row.querySelector(".js-question");

            }
            if (!row) {
                popup = addQuestionContainer;
                form = addQuestionContainer;
            }

            const answerInput = form.querySelector(".js-answer");
            const questionInput = form.querySelector(".js-question-title");

            if (row) {
                answerInput.value = answerText;
                questionInput.value = questionText;
            }

            if (!row) {
                answerInput.value = "";
                questionInput.value = "";
            }

            if (e.target.classList.contains("js-cancel")) {
                popup = deleteForm;
                form = deleteForm;
                openForm(popup);
                return;
            }

            const button = form.querySelector(".js-save-button");
            button.disabled = true;

            openForm(popup);
        })
    });

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("click", (e) => {
            e.stopPropagation();

            let elementTarget = e.target;
            let parentElement = elementTarget.parentElement.parentElement.parentElement;

            selectAllChks.checked ? selectAllChks.checked = false : allChksSelected();
            hasChkChecked() ? deleteBtn.disabled = false : deleteBtn.disabled = true;

            if (elementTarget.checked) {
                parentElement.setAttribute("aria-selected", "true");
                return;
            }
            parentElement.setAttribute("aria-selected", "false");
        })
    });

    selectAllChks.addEventListener("click", (e) => {
        e.stopPropagation();
        const elementTarget = e.target;

        checkboxes.forEach(chk => {
            const row = chk.closest(".faq-menager__row");
            if (elementTarget.checked) {
                row.setAttribute("aria-selected", "true");
                chk.checked = true;
                return;
            }

            row.setAttribute("aria-selected", "false");
            chk.checked = false;

        })

        hasChkChecked() ? deleteBtn.disabled = false : deleteBtn.disabled = true;

    })

    function hasChkChecked() {
        let hasChkChecked = false;

        checkboxes.forEach(chk => {
            if (chk.checked) {
                hasChkChecked = true;
            }
        });

        return hasChkChecked;

    }

    function allChksSelected() {
        let allSelected = true;

        checkboxes.forEach(chk => {
            if (!chk.checked) {
                allSelected = false;
                return;
            }
        });

        if (allSelected) {
            selectAllChks.checked = true;
        }
    }
</script>