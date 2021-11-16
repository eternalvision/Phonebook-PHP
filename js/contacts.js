const userName = document.querySelector("#userName");
const userNumber = document.querySelector("#userNumber");
const renderRoot = document.querySelector("#root");
const contactBtn = document.querySelector("#contactBtn");

const exit = document.querySelector("#exit");

let users = [];

contactBtn.addEventListener("click", () => {
  if (userName.value < 2 || userNumber.value < 5) {
    userName.style.borderColor = "#ff0000";
    userNumber.style.borderColor = "#ff0000";
    return;
  } else {
    CreateObject();
    userName.textContent = "";
    userNumber.textContent = "";
    userName.style.borderColor = "lightgreen";
    userNumber.style.borderColor = "lightgreen";
  }
});

class Phonebook {
  constructor(object) {
    this.name = object.name;
    this.number = object.number;
  }
}

function CreateObject() {
  let user = new Phonebook({
    name: userName.value,
    number: userNumber.value,
  });
  addEntry();
  users.push(user);
}

function addEntry() {
  var existingEntries = JSON.parse(localStorage.getItem("allEntries"));
  if (existingEntries == null) existingEntries = [];
  var entryName = userName.value;
  var entryNumber = userNumber.value;

  var entry = {
    userId: userId,
    name: entryName,
    number: entryNumber,
  };

  existingEntries.push(entry);
  localStorage.setItem("allEntries", JSON.stringify(existingEntries));

  // existingEntries.entry = new Array();

  // existingEntries.entry.push({
  //   userId: userId,
  //   name: entryName,
  //   number: entryNumber,
  // });

  // filter and remover
  //     const uniqueArray = existingEntries.entry.filter((entry, index) => {
  //       const _entry = JSON.stringify(entry);
  //       return index === existingEntries.entry.findIndex(obj => {
  //         return JSON.stringify(obj) === _entry;
  //       });
  //     });
  //     localStorage.setItem("allEntries", JSON.stringify(uniqueArray));
}

let entriesContact = JSON.parse(localStorage.getItem("allEntries"));

if (entriesContact !== null) {
  entriesContact.forEach((contact) => {
    if (contact.userId == userCheck) {
      const userName = contact.name;
      const userNum = contact.number;

      renderRoot.insertAdjacentHTML(
        "beforeend",
        `

        <li class="contactItem">
          <ul class="render-root">
            <li>
              <span>
              ${userName}
              </span>
            </li>
            <li>
              <span>
              <a href="tel:${userName}">
              ${userNum}
              </a>
              </span>
              <ul class="edit-btn">
                <li>
                  <button class="edit-item">
                    <img src="https://img.icons8.com/plumpy/24/000000/rename.png"/>
                  </button>
                </li>
                <li>
                  <button id="contactDelBtn" class="edit-item">
                  <img src="https://img.icons8.com/plumpy/24/000000/erase.png"/>
                  </button>
                </li>
              </ul>
            </li>

          </ul>
        </li>

        `
      );
    }
  });
}

exit.addEventListener("click", () => {
  renderRoot.textContent = "";
});

$(".contactItem").each(function () {
  const elValue = $(this); // This is your rel value
});
