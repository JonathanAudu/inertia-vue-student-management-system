<script setup>
import MagnifyingGlass from "@/Components/Icons/MagnifyingGlass.vue";

defineProps({
    students: {
        type: Object,
        required: true,
    },
});

</script>

<template>
    <div class="bg-gray-100 py-10">
        <div class="mx-auto max-w-7xl">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="px-7 sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex-auto">
                        <h1 class="text-xl font-semibold text-gray-900">Students</h1>
                        <p class="mt-2 text-sm text-gray-700">A list of all the students</p>
                    </div>
                    <div class="mt-4 sm:mt-0 sm:flex-none">
                        <a href="#"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                            Add Student
                        </a>
                    </div>
                </div>
                <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <div class="px-7 relative flex items-center w-full sm:w-1/5">
                        <input type="text"
                            class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="Search students..." />
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3 pointer-events-none">
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex flex-col w-full sm:w-full">
                    <div class="py-2 align-middle sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">
                                            ID
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">
                                            Email
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">
                                            Class
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">
                                            Section
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">
                                            Created At
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr v-for="student in students.data" :key="student.id">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black">
                                            {{ student.id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ student.name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ student.email }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ student.class.name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ student.section.name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ student.created_at }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <a href="#" class="px-2 text-indigo-600 hover:text-indigo-900">Delete</a>
                                        </td>
                                    </tr>
                                    <!-- More student rows go here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
