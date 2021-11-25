<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
	 * Transform the resource into an array.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'name' => $this->name,
			'email' => $this->email,
			'created_at' => $this->created_at->format('d/m/Y H:i'),
			'updated_at' => $this->updated_at->format('d/m/Y H:i'),

			'links' => [
				'show' => route('users.show', $this->id),
				'edit' => route('users.edit', $this->id),
				'destroy' => route('users.destroy', $this->id)
			]
		];
	}
}