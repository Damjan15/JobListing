<x-layout>
    <main class="container mx-auto p-4 mt-4">
        <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
            <h2 class="text-4xl text-center font-bold mb-4">
                Create Job Listing
            </h2>
            <form method="POST" action="/jobs/store" enctype="multipart/form-data">
                @csrf
                <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                    Job Info
                </h2>

                <div class="mb-4">
                    <label class="block text-gray-700" for="title">Job Title</label>
                    <input id="title" type="text" name="title"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('title') border-red-500 @enderror" placeholder="Software Engineer" value="{{old('title')}}" />
                    
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="description">Job Description</label>
                    <textarea cols="30" rows="7" id="description" name="description"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('description') border-red-500 @enderror"
                        placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team...">
                            {{old('description')}}
                    </textarea>

                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="salary">Annual Salary</label>
                    <input id="salary" type="number" name="salary"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('salary') border-red-500 @enderror" placeholder="90000" value="{{old('salary')}}" />
                    
                    @error('salary')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="requirements">Requirements</label>
                    <textarea id="requirements" name="requirements" class="w-full px-4 py-2 border rounded focus:outline-none @error('requirements') border-red-500 @enderror"
                        placeholder="Bachelor's degree in Computer Science">
                        {{old('requirements')}}
                    </textarea>
                    
                    @error('requirements')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="tags">Tags (comma-separated)</label>
                    <input id="tags" type="text" name="tags"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('tags') border-red-500 @enderror"
                        placeholder="development,coding,java,python" value="{{old('tags')}}" />
                    
                    @error('tags')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="job_type">Job Type</label>
                    <select id="job_type" name="job_type" class="w-full px-4 py-2 border rounded focus:outline-none @error('job_type') border-red-500 @enderror">
                        <option value="Full-Time" {{old('job_type') === 'Full-Time' ? 'selected' : ''}}>
                            Full-Time
                        </option>
                        <option value="Part-Time" {{old('job_type') === 'Part-Time' ? 'selected' : ''}}>Part-Time</option>
                        <option value="Contract" {{old('job_type') === 'Contract' ? 'selected' : ''}}>Contract</option>
                        <option value="Temporary" {{old('job_type') === 'Temporary' ? 'selected' : ''}}>Temporary</option>
                        <option value="Internship" {{old('job_type') === 'Internship' ? 'selected' : ''}}>Internship</option>
                        <option value="Volunteer" {{old('job_type') === 'Volunteer' ? 'selected' : ''}}>Volunteer</option>
                        <option value="On-Call" {{old('job_type') === 'On-Call' ? 'selected' : ''}}>On-Call</option>
                    </select>
                    
                    @error('job_type')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="remote">Remote</label>
                    <select id="remote" name="remote" class="w-full px-4 py-2 border rounded focus:outline-none @error('remote') border-red-500 @enderror">
                        <option value="false" {{ old('remote')==false ? 'selected' : '' }}>No</option>
                        <option value="true" {{ old('remote')==true ? 'selected' : '' }}>Yes</option>
                    </select>

                    @error('remote')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="address">Address</label>
                    <input id="address" type="text" name="address"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('address') border-red-500 @enderror" placeholder="123 Main St" value="{{old('address')}}" />

                    @error('address')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="city">City</label>
                    <input id="city" type="text" name="city"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('city') border-red-500 @enderror" placeholder="Albany" value="{{old('city')}}" />
                    
                    @error('city')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="state">State</label>
                    <input id="state" type="text" name="state"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('state') border-red-500 @enderror" placeholder="NY" value="{{old('state')}}" />
                    
                    @error('state')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="zipcode">ZIP Code</label>
                    <input id="zipcode" type="text" name="zipcode"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('zipcode') border-red-500 @enderror" placeholder="12201" value="{{old('zipcode')}}" />
                    
                    @error('zipcode')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                    Company Info
                </h2>

                <div class="mb-4">
                    <label class="block text-gray-700" for="company_name">Company Name</label>
                    <input id="company_name" type="text" name="company_name"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('company_name') border-red-500 @enderror" placeholder="Company name" value="{{old('company_name')}}" />
                    
                    @error('company_name')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="company_description">Company Description</label>
                    <textarea id="company_description" name="company_description"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('company_description') border-red-500 @enderror" placeholder="Company Description">
                        {{old('company_description')}}
                    </textarea>
                    
                    @error('company_description')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="company_website">Company Website</label>
                    <input id="company_website" type="text" name="company_website"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('company_website') border-red-500 @enderror" placeholder="Enter website" value="{{old('company_website')}}" />

                    @error('company_website')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="contact_phone">Contact Phone</label>
                    <input id="contact_phone" type="text" name="contact_phone"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('contact_phone') border-red-500 @enderror" placeholder="Enter phone" value="{{old('contact_phone')}}" />
                    
                    @error('contact_phone')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="contact_email">Contact Email</label>
                    <input id="contact_email" type="email" name="contact_email"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('contact_email') border-red-500 @enderror"
                        placeholder="Email where you want to receive applications" value="{{old('contact_email')}}" />

                    @error('contact_email')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700" for="company_logo">Company Logo</label>
                    <input id="company_logo" type="file" name="company_logo"
                        class="w-full px-4 py-2 border rounded focus:outline-none @error('company_logo') border-red-500 @enderror" />
                    
                    @error('company_logo')
                        <p class="text-red-500 text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                    Save
                </button>
            </form>
        </div>
    </main>
</x-layout>
