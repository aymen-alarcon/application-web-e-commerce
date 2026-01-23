if (window.location.href.includes("Admin/Categories")) {
   function openModal(id) {
        document.getElementById('modal-backdrop').classList.remove('hidden')
        document.getElementById(id).classList.remove('hidden')
    }

    function closeModal(id) {
        document.getElementById('modal-backdrop').classList.add('hidden')
        document.getElementById(id).classList.add('hidden')
    }

    function openEditModal(id, name, description) {
        document.getElementById('editCategoryId').value = id
        document.getElementById('editCategoryName').value = name
        document.getElementById('editCategoryDescription').value = description
        openModal('editCategoryModal')
    }

    function openDeleteModal(id) {
        openModal('deleteCategoryModal')
        document.getElementById('deleteCategoryId').value = id
    } 
}

if (window.location.href.includes("Admin/Products")) {
   function openModal(id) {
        document.getElementById('modal-backdrop').classList.remove('hidden')
        document.getElementById(id).classList.remove('hidden')
    }

    function closeModal(id) {
        document.getElementById('modal-backdrop').classList.add('hidden')
        document.getElementById(id).classList.add('hidden')
    }

    function openEditModal(id, name, description, Category_id, price, stock) {
        document.getElementById('editProductId').value = id
        document.getElementById('editProductName').value = name
        document.getElementById('editProductDescription').value = description
        document.getElementById('editProductCategory').value = Category_id
        document.getElementById('editProductPrice').value = price
        document.getElementById('editProductStock').value = stock

        openModal('editProductModal')
    }

    function openDeleteModal(id) {
        openModal('deleteProductModal')
        document.getElementById('deleteProductId').value = id
    } 
}

if (window.location.href.includes("Admin/Users")) {
   function openModal(id) {
        document.getElementById('modal-backdrop').classList.remove('hidden')
        document.getElementById(id).classList.remove('hidden')
    }

    function closeModal(id) {
        document.getElementById('modal-backdrop').classList.add('hidden')
        document.getElementById(id).classList.add('hidden')
    }

    function openEditModal(id, first_name, last_name, email, role) {
        document.getElementById('editUserId').value = id
        document.getElementById('editUserFirstName').value = first_name
        document.getElementById('editUserLastName').value = last_name
        document.getElementById('editUserEmail').value = email
        document.getElementById('editUserRole').value = role

        openModal('editUserModal')
    }

    function openDeleteModal(id) {
        openModal('deleteUserModal')
        document.getElementById('deleteUserId').value = id
    } 
}


if (window.location.href.includes("Cart")) {
    const totalPriceElement = document.querySelector(".Total-Price");

    function calculateTotal() {
        let finalTotal = 0;

        document.querySelectorAll(".product-container").forEach(element => {
            const price = Number(element.children[1].textContent);
            const quantity = Number(element.children[2].children[0].value);
            const itemTotal = price * quantity;

            element.children[3].textContent = itemTotal;
            finalTotal += itemTotal;
        });

        totalPriceElement.textContent = finalTotal;
    }

    document.querySelectorAll(".product-container").forEach(element => {
        element.children[2].addEventListener("change", calculateTotal);
    });

    calculateTotal();

    document.querySelector(".Grand-Total").textContent = Number(totalPriceElement.textContent) + 15
}
