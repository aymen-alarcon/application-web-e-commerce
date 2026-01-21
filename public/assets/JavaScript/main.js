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
    } 
}