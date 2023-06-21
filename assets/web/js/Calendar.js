class Calendar {
    static week = ["DOM", "SEG", "TER", "QUA", "QUI", "SEX", "SAB"];
    static months = [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro",
    ];
    constructor(year, month, events) {
        this.month = (isNaN(month) || month == null || month > 11) ? new Date().getMonth() : month;
        this.year = (isNaN(year) || year == null) ? new Date().getFullYear() : year;
        this.date = new Date(this.year, this.month);
        this.events = events == null ? [] : events;
        this.calendar = this.fillCalendar();
    }
    getEvents(date) {
        let events = [];
        if (date == undefined) {
            return this.events;
        }
        this.events.forEach(ev => {
            if (date.toString() === ev.date.toString()) {
                events.push(ev);
            }
        })
        return events;

    }
    setEvents(events) {
        this.events = events;
    }
    fillCalendar() {
        let firstDay = 1 - new Date(this.year, this.month).getDay();
        let calendar = [];
        for (let i = firstDay; i < 42 + firstDay; i++) {
            let classObj;
            let date = new Date(this.year, this.month, i);
            if (i <= 0 || i > new Date(this.year, this.month + 1, 0).getDate()) {
                classObj = "day--other"
            } else {
                let dateAtual = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                if (dateAtual.toString() === date.toString()) {
                    classObj = "day--today";
                } else {
                    classObj = "day--current";
                }
            }
            calendar.push({ date: date, class: classObj, events: this.getEvents(date) })
        }
        return calendar;
    }
    insertCalendarIntoDOM(domElement) {
        let calendarHeader = document.createElement("div");
        let calendarBody = document.createElement("div");
        let monthYear = `<div class="month-year">${Calendar.months[this.month]} ${this.year}</div>`;
        let legend = document.createElement("div");
        calendarHeader.classList.add("calendar--header");
        calendarBody.classList.add("calendar--body");
        legend.classList.add("legend");
        calendarHeader.innerHTML = `<i js-arrow-back class="fa-solid fa-angle-left"></i> ${monthYear} <i js-arrow-next class="fa-solid fa-angle-right"></i>`;
        for (let i = 0; i < 42; i += 7) {
            let calendarWeek = document.createElement("div");
            calendarWeek.classList.add("calendar--week");
            for (let j = 0; j < 7; j++) {
                let date = this.calendar[i + j].date;
                let events = this.calendar[i + j].events;
                let day = document.createElement("div");
                let dayNumber = document.createElement("div");
                let dayWeek = document.createElement("div");
                let dayEvents = document.createElement("div");
                day.dataset.date = date;
                day.classList.add("day");
                day.classList.add(this.calendar[i + j].class);
                if (events.length > 0) {
                    events.forEach(ev => {
                        let event = document.createElement("span");
                        event.classList.add("event", ev.color);
                        event.style.backgroundColor = ev.color;
                        event.style.display = "block";
                        event.style.height = "10px";
                        event.style.width = "10px";
                        dayEvents.appendChild(event);
                    })
                }
                dayNumber.classList.add("day--number");
                dayWeek.classList.add("day--week");
                dayEvents.classList.add("day--events");
                dayNumber.textContent = date.getDate() < 10 ? `0${date.getDate()}` : date.getDate();
                dayWeek.textContent = Calendar.week[date.getDay()];
                day.appendChild(dayWeek);
                day.appendChild(dayNumber);
                day.appendChild(dayEvents);
                calendarWeek.appendChild(day);
            }
            calendarBody.appendChild(calendarWeek);
        }
        this.events.forEach(ev => {
            let text = document.createElement("p");
            text.innerHTML = `<span style="background-color: ${ev.color}"></span> ${ev.type}`;
            legend.appendChild(text);
        })
        document.querySelector(`.${domElement}`).appendChild(calendarHeader);
        document.querySelector(`.${domElement}`).appendChild(calendarBody);
        document.querySelector(`.${domElement}`).appendChild(legend);
        this.addDetails();
    }
    
    addDetails() {
        const days = document.querySelectorAll(".day");
        let handleDay = {};
        let targetWeek = null;
        let targetDetails = null;
        let isAnimating = false;
        let arrowXLeft = null;

        days.forEach(day => {
            day.addEventListener("click", (clickedElement) => {
                if (isAnimating) return;

                handleDay.element = clickedElement.currentTarget;
                handleDay.xCenter = getXCenter(handleDay.element);
                let details = document.createElement("div");
                let arrow = document.createElement("div");
                let events = document.createElement("div");
                let eventsContainer = document.createElement("div");
                let dayEvents = this.getEvents(handleDay.element.dataset.date);
                let closestWeek = clickedElement.currentTarget.closest(".calendar--week");
                details.classList.add("details", "in");
                arrow.classList.add("arrow");
                eventsContainer.classList.add("events--container", "in");
                events.classList.add("events");
                eventsContainer.appendChild(events);
                details.appendChild(eventsContainer);
                details.appendChild(arrow);

                if (dayEvents.length > 0) {
                    dayEvents.forEach(ev => {
                        events.innerHTML += `<p> <span style='background-color:${ev.color}'></span> ${ev.description}</p>`;
                    })
                } else {
                    events.innerHTML = "Sem eventos...";
                }

                if (targetWeek === null) {
                    targetWeek = closestWeek;
                    targetDetails = details;
                    closestWeek.appendChild(details);
                } else if (targetWeek !== closestWeek) {
                    hideWeek(closestWeek, details);
                } else {
                    hideDetails(targetDetails, eventsContainer);
                }
                arrow.style.left = arrowXCenter(arrow, details);
            })
        });

        function hideWeek(week, details) {

            let weekDetails = targetWeek.querySelector(".details");
            isAnimating = true;
            weekDetails.classList.replace("in", "out");
            weekDetails.addEventListener("animationend", (animation) => {
                if (animation.animationName == "fade-out-details") {
                    weekDetails.remove();
                    isAnimating = false;
                }
            });
            targetWeek = week;
            week.appendChild(details);

            targetDetails = details;
        }

        function hideDetails(details, eventsContainer) {
            let arrow = document.querySelector(".arrow");
            if (arrow) {
                arrow.style.left = arrowXCenter(arrow, details);
            }
            let dayDetails = details.querySelector(".events--container");
            isAnimating = true;
            dayDetails.classList.replace("in", "out");
            dayDetails.addEventListener("animationend", (animation) => {
                if (animation.animationName == "fade-out-opacity") {
                    dayDetails.remove();
                    details.appendChild(eventsContainer);
                    isAnimating = false;
                }
            });
        }

        function getXCenter(element) {
            return element.offsetLeft + element.offsetWidth / 2;
        }
        function arrowXCenter(element, details) {
            arrowXLeft = details.offsetLeft;
            let arrowWidth = element.offsetWidth / 2;
            let difference = Math.abs(arrowXLeft - handleDay.xCenter) - arrowWidth;
            return difference + "px";
        }
    }

}
let events = [
    {
        type: "Feriado",
        description: "Feriado de Páscoa",
        color: "red",
        date: new Date(2023, 5, 20)
    },
    {
        type: "Reunião",
        description: "Conselho de Classe",
        color: "yellow",
        date: new Date(2023, 5, 20)
    },
    {
        type: "Sábado Letivo",
        description: "Sábado letivo",
        color: "green",
        date: new Date(2023, 4, 20)
    }

];
const cal03 = new Calendar(null, null, events);
cal03.insertCalendarIntoDOM("js-calendar");