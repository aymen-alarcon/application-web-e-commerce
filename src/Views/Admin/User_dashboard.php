<?php require "src/Views/Includes/sidebar.php"; ?>
<div id="modal-backdrop" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-40"></div>
<div id="addUserModal" class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
  <div class="bg-white dark:bg-[#1e2124] w-full max-w-md rounded-xl shadow-xl border border-slate-200 dark:border-slate-800">
    <div class="p-5 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
      <h3 class="text-lg font-bold text-slate-900 dark:text-white">Add User</h3>
      <button onclick="closeModal('addUserModal')" class="text-slate-400 hover:text-slate-600">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>
    <form class="p-5 space-y-4" method="POST" action="/registerUserProcess">
      <div>
        <label class="text-sm font-medium text-slate-600 dark:text-slate-400">First Name</label>
        <input type="text" name="first_name" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm" placeholder="e.g. Smartphones">
      </div>
      <div>
        <label class="text-sm font-medium text-slate-600 dark:text-slate-400">Last Name</label>
        <input type="text" name="last_name" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm" placeholder="e.g. Smartphones">
      </div>
      <div>
        <label class="text-sm font-medium text-slate-600 dark:text-slate-400">Email</label>
        <input type="text" name="email" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm" placeholder="e.g. Smartphones">
      </div>
      <div>
        <select name="role" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm">
          <?php foreach($roles as $role): ?>
            <option name="role" value="<?= $role->getId() ?>"><?= $role->getRole_name() ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div>
        <label class="text-sm font-medium text-slate-600 dark:text-slate-400">Password</label>
        <input type="password" name="password" class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary text-sm" placeholder="••••••••">
      </div>
      <div class="flex justify-end gap-2 pt-4">
        <button type="submit" onclick="closeModal('addUserModal')" class="px-4 py-2 text-sm rounded-lg border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">
          Cancel
        </button>
        <button type="submit" class="px-5 py-2 bg-primary hover:bg-primary/90 text-white rounded-lg font-bold text-sm">
          Create
        </button>
      </div>
    </form>
  </div>
</div>
<div id="editUserModal" class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
  <div class="bg-white dark:bg-[#1e2124] w-full max-w-md rounded-xl shadow-xl border border-slate-200 dark:border-slate-800">
    <div class="p-5 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
      <h3 class="text-lg font-bold">Edit User</h3>
      <button type="button" onclick="closeModal('addUserModal')">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>
    <form class="p-5 space-y-4" method="POST" action="/updateUserProcess">
      <input type="hidden" id="editUserId" name="id">
      <div>
        <label>First Name</label>
        <input type="text" id="editUserFirstName" name="first_name"
          class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800">
      </div>

      <div>
        <label>Last Name</label>
        <input type="text" id="editUserLastName" name="last_name"
          class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800">
      </div>

      <div>
        <label>Email</label>
        <input type="text" id="editUserEmail" name="email"
          class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800">
      </div>

      <div>
        <select id="editUserRole" name="role"
          class="mt-1 w-full rounded-lg bg-slate-50 dark:bg-slate-800">
          <?php foreach($roles as $role): ?>
            <option value="<?= $role->getId() ?>">
              <?= $role->getRole_name() ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="flex justify-end gap-2 pt-4">
        <button type="button" onclick="closeModal('editUserModal')">Cancel</button>
        <button type="submit">Update</button>
      </div>
    </form>
  </div>
</div>
<div id="deleteUserModal" class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
  <div class="bg-white dark:bg-[#1e2124] w-full max-w-sm rounded-xl shadow-xl border border-slate-200 dark:border-slate-800">
    <form class="p-5 text-center space-y-3" method="POST" action="/deleteUserProcess">
        <input type="hidden" id="deleteUserId" name="id">
      <div class="mx-auto size-12 rounded-full bg-red-50 dark:bg-red-900/20 flex items-center justify-center text-red-600">
        <span class="material-symbols-outlined">delete</span>
      </div>
      <h3 class="text-lg font-bold">Delete User?</h3>
      <p class="text-sm text-slate-500 dark:text-slate-400">
        This action cannot be undone.
      </p>
      <div class="flex justify-center gap-2 pt-4">
        <button onclick="closeModal('deleteUserModal')" class="px-4 py-2 text-sm rounded-lg border border-slate-200 dark:border-slate-800">
          Cancel
        </button>
        <button type="submit" class="px-5 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg font-bold text-sm">
          Delete
        </button>
      </div>
    </form>
  </div>
</div>
<main class="ml-64 flex-1 min-h-screen">
    <div class="max-w-6xl mx-auto px-8 py-8">
        <div class="mb-6 flex items-center justify-between">
            <div class="relative max-w-md">
              <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                  <span class="material-symbols-outlined text-[#71757a]">search</span>
              </div>
              <input class="block w-full pl-11 pr-4 py-3 bg-white dark:bg-gray-800 border border-border-muted dark:border-gray-700 rounded-xl focus:ring-primary focus:border-primary text-sm" placeholder="Search users by name, email or ID..." type="text" />
            </div>
            <button onclick="openModal('addUserModal')" class="bg-primary text-white hover:bg-primary/90 text-white px-4 h-10 rounded-md font-semibold text-sm flex items-center gap-2 transition-colors shadow-sm">
              <span class="material-symbols-outlined text-lg">add</span>
              <span>Add New User</span>
            </button>
        </div>
        <div class="bg-white dark:bg-gray-800 border border-border-muted dark:border-gray-700 rounded-xl overflow-hidden shadow-sm">
          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
              <thead>
                <tr class="bg-gray-50 dark:bg-gray-900/50 border-b border-border-muted dark:border-gray-700">
                  <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider w-20">ID</th>
                  <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider w-16">Avatar</th>
                  <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider">Full Name</th>
                  <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider">Email Address</th>
                  <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider">Role</th>
                  <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider">Status</th>
                  <th class="px-6 py-4 text-xs font-bold text-[#71757a] uppercase tracking-wider text-right">Actions</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-border-muted dark:divide-gray-700">
                      <?php if(count($users) > 0): ?>
                        <?php foreach($users as $user): ?>
                          <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30 transition-colors">
                            <td class="px-6 py-4 text-sm font-medium text-[#71757a]">#00<?= $user->getId() ?></td>
                            <td class="px-6 py-4">
                              <div class="size-9 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-700 dark:text-blue-300 font-bold text-xs" data-alt="User initials placeholder for Jane Doe">JD</div>
                            </td>
                            <td class="px-6 py-4 text-sm font-semibold text-[#141415] dark:text-white"><?= $user->getFirst_name() . " " . $user->getLast_name() ?></td>
                            <td class="px-6 py-4 text-sm text-[#71757a]"><?= $user->getEmail() ?></td>
                            <td class="px-6 py-4">
                              <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-primary/10 text-primary border border-primary/20"><?php if($user->getRole_id() === 2){echo "Admin";}else{echo "User";} ?></span>
                            </td>
                            <td class="px-6 py-4">
                              <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900/20 dark:text-green-400 border border-green-200 dark:border-green-800">Active</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                              <div class="flex justify-end gap-3">
                                <button onclick="openEditModal(<?= $user->getId() ?>,'<?= $user->getFirst_name() ?>','<?= $user->getLast_name() ?>','<?= $user->getEmail() ?>', '<?= $user->getRole_id() ?>')"
                                  class="p-1.5 hover:bg-white border border-transparent hover:border-neutral-border rounded text-neutral-text-muted hover:text-accent">
                                  <span class="material-symbols-outlined text-lg">edit</span>
                                </button>
                                <button onclick="openDeleteModal(<?= $user->getId() ?>)" class="p-1.5 hover:bg-white border border-transparent hover:border-neutral-border rounded text-neutral-text-muted hover:text-red-600">
                                  <span class="material-symbols-outlined text-lg">delete</span>
                                </button>
                              </div>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-gray-100">There are no orders Yet</td>
                      <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 bg-gray-50 dark:bg-gray-900/50 border-t border-border-muted dark:border-gray-700 flex items-center justify-between">
              <p class="text-xs text-[#71757a] font-medium">Showing <span class="text-[#141415] dark:text-white">1 to 5</span> of 48 users</p>
              <div class="flex items-center gap-1">
                <button class="size-8 flex items-center justify-center rounded-lg border border-border-muted dark:border-gray-700 bg-white dark:bg-gray-800 text-[#71757a] hover:bg-gray-50">
                  <span class="material-symbols-outlined text-base">chevron_left</span>
                </button>
                <button class="size-8 flex items-center justify-center rounded-lg bg-primary text-white font-bold text-xs">1</button>
                <button class="size-8 flex items-center justify-center rounded-lg text-[#71757a] hover:bg-gray-100 dark:hover:bg-gray-700 font-medium text-xs">2</button>
                <button class="size-8 flex items-center justify-center rounded-lg text-[#71757a] hover:bg-gray-100 dark:hover:bg-gray-700 font-medium text-xs">3</button>
                <span class="px-1 text-[#71757a]">...</span>
                <button class="size-8 flex items-center justify-center rounded-lg text-[#71757a] hover:bg-gray-100 dark:hover:bg-gray-700 font-medium text-xs">10</button>
                <button class="size-8 flex items-center justify-center rounded-lg border border-border-muted dark:border-gray-700 bg-white dark:bg-gray-800 text-[#71757a] hover:bg-gray-50">
                  <span class="material-symbols-outlined text-base">chevron_right</span>
                </button>
              </div>
            </div>
        </div>
    </div>
<?php require "src/Views/Includes/footer.php"; ?>