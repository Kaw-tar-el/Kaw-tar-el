  @foreach ($educations as $education)
      <x-education-card 
          :title="$education->title" 
          :information="$education->information" 
          :focus="$education->focus" 
      />
    @endforeach

