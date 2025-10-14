
    const monthYear = document.getElementById("monthYear");
    const calendarBody = document.getElementById("calendarBody");
    const prev = document.getElementById("prev");
    const next = document.getElementById("next");

    let date = new Date();

    function renderCalendar() {
      const year = date.getFullYear();
      const month = date.getMonth();

      monthYear.textContent = date.toLocaleString("es-ES", { month: "long", year: "numeric" }).toUpperCase();

      const firstDay = new Date(year, month, 1).getDay();
      const daysInMonth = new Date(year, month + 1, 0).getDate();

      calendarBody.innerHTML = "";
      let row = document.createElement("tr");

      for (let i = 0; i < firstDay; i++) {
        row.appendChild(document.createElement("td"));
      }

      for (let day = 1; day <= daysInMonth; day++) {
        if (row.children.length === 7) {
          calendarBody.appendChild(row);
          row = document.createElement("tr");
        }
        const cell = document.createElement("td");
        cell.textContent = day;
        row.appendChild(cell);
      }

      calendarBody.appendChild(row);
    }

    prev.addEventListener("click", () => {
      date.setMonth(date.getMonth() - 1);
      renderCalendar();
    });

    next.addEventListener("click", () => {
      date.setMonth(date.getMonth() + 1);
      renderCalendar();
    });

    renderCalendar();